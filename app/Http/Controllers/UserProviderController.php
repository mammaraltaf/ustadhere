<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\AppointmentToProvider;
use Illuminate\Http\Request;

class UserProviderController extends Controller
{
    public function index()
    {
        $appointmentProvider = AppointmentToProvider::where('provider_id',auth()->user()->id)->where('is_accepted',0)->where('status',0)->get();
        return view('user.index',compact('appointmentProvider'));
    }

    public function acceptAppointment($id){
        $appointment = AppointmentToProvider::find($id);
        $appointment->is_accepted = 1;
        $appointment->save();

        AppointmentToProvider::where('appointment_id',$appointment->appointment_id)
            ->where('id','!=',$id)->where('is_accepted',0)->delete();

        return redirect()->back()->with('success','Appointment Accepted Successfully');
    }
}
