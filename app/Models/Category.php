<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function services(){
        return $this->hasMany(Service::class);
    }

    public function categoryPostModel($request){
        try {
            $category = Category::firstOrCreate([
                'category_name' => isset($request->category) ? $request->category : null,
            ]);
            return $category;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function categoryEdit($id){
        $category = Category::find($id);
        return $category;
    }

    public function categoryEditPost($request, $id){
        try{
            $cat = Category::find($id);
//            dd($cat);
            $category= Category::where('id',$cat->id)->update([
                'category_name'=> isset($request->category) ? $request->category : null,
            ]);
            return $category;
        }
        catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
