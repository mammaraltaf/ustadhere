<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentToProvider extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function appointment(){
        return $this->belongsTo(Appointment::class);
    }

    public function provider(){
        return $this->belongsTo(User::class,'provider_id','id');
    }
}
