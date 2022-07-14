<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Review extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function reviewPostModel($request){
        try {
            if(array_key_exists('image',$request->all())) {
                if ($file = $request->image) {
                    $filename = date('YmdHi') . ".". $file->getClientOriginalExtension();
                    $path = public_path('upload/reviews/');

                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file->move($path, $filename);
                    $data['image'] = $filename;
                }
                else{
                    $data['image'] = null;
                }
            }

            $review = Review::firstOrCreate([
                'customer_name'=> isset($request->customer_name) ? ($request->customer_name) : null,
                'service'=> isset($request->service) ? ($request->service) : null,
                'image'=> isset($request->image) ? $data['image'] : null,
                'review'=> isset($request->review) ? ($request->review) : null,
            ]);
        }
        catch (\Exception $e){
            return $e->getMessage();
        }
        return $review;
    }

    public function reviewEditPost($request,$id){
        try {
            $rev = Review::find($id);
            if(array_key_exists('image',$request->all())) {
                if ($file = $request->image) {
                    $filename = date('YmdHi') . ".". $file->getClientOriginalExtension();
                    $path = public_path('upload/reviews/');

                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file->move($path, $filename);
                    $data['image'] = $filename;
                    $removeImagePath = public_path('upload/reviews/'.$rev->image);
                    if(File::exists($removeImagePath)){
                        unlink($removeImagePath);
                    }
                }
                else{
                    $data['image'] = null;
                }
            }

            $review = Review::where('id',$rev->id)->update([
                'customer_name'=> isset($request->customer_name) ? ($request->customer_name) : null,
                'service'=> isset($request->service) ? ($request->service) : null,
                'image'=> isset($request->image) ? $data['image'] : null,
                'review'=> isset($request->review) ? ($request->review) : null,
            ]);
        }
        catch (\Exception $e){
            return $e->getMessage();
        }
        return $review;
    }
}
