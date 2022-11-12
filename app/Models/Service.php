<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function servicePostModel($request)
    {
        try {
            $service = Service::firstOrCreate([
                'service_name' => $request->service_name ?? null,
                'service_price'=>$request->service_price ?? null,
                'category_id' => $request->category ?? null,
            ]);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        return $service;
    }

    public function serviceEditPost($request,$id){
        try{
            $ser = Service::find($id);
            $service= Service::where('id',$ser->id)->update([
                'category_id'=> isset($request->category ) ? $request->category  : null,
                'service_price'=> isset($request->service_price ) ? $request->service_price  : null,
                'service_name'=> isset($request->service_name) ? $request->service_name : null,
            ]);
            return $service;
        }
        catch (\Throwable $th) {
            return $th->getMessage();
        }
    }


}
