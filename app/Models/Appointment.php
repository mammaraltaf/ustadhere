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

    }
}
