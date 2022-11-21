<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class UserProviderController extends Controller
{
    public function index()
    {
        $requests = Appointment::where('city',auth()->user()->city)->where('status',0)->get();

        return view('user.index',compact('requests'));
    }
}
