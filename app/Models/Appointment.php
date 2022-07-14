<?php

namespace App\Models;

use App\Mail\appointmentCreated;
use App\Mail\orderCompleted;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function appointmentStore($request)
    {
        try {
            $appointment = Appointment::Create([
                'name' => $request->name ?? null,
                'phone' => $request->phone ?? null,
                'email' => $request->email ?? null,
                'address' => $request->address ?? null,
                'appointmentDateTime' => $request->dateTime ?? null,
                'appointmentDetail' => $request->message ?? null,
                'status' => 0,
                'category_id' => $request->category ?? null,
                'service_id' => $request->service ?? null,
            ]);
            return $appointment;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
