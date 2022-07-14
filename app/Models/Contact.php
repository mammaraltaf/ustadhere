<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function contactStore($request){
        try {
            $contact = Contact::firstOrCreate([
                'full_name' => $request->full_name ?? null,
                'email' => $request->email ?? null,
                'topic' => $request->topic ?? null,
                'phone' => $request->phone ?? null,
                'message' => $request->message ?? null,
            ]);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        return $contact;
    }

}
