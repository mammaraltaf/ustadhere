<?php

namespace App\Http\Controllers;

use App\Mail\appointmentCreated;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Review;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function about(){
        $reviews = Review::all();
        return view('frontend.about',compact('reviews'));
    }

    public function testimonials(){
        return view('frontend.testimonials');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function appointment(){
        $categories = Category::all();
        $services = Service::all();
        return view('frontend.appoinment',['categories'=>$categories,'services'=>$services]);
    }

    public function appointmentPost(Request $request){
        $val = (new Appointment)->appointmentStore($request);
        if (isset($val)) {
            $details = $val;
            Mail::to('rj.mrauf@gmail.com')->send(new appointmentCreated($details));
            return redirect()->back()->with('success','Appointment Created Successfully! We will contact you as soon as possible. If you are in hurry please call at 0347-5055405.');
        }
        else{
            return redirect()->back()->with('error','There was an error creating the appointment!');
        }
    }

    public function contactPost(Request $request){
        (new Contact())->contactStore($request);
        return redirect()->back()->with('success','Your message was sent successfully.');
    }
}
