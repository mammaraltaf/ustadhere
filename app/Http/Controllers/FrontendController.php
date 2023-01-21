<?php

namespace App\Http\Controllers;

use App\Mail\appointmentCreated;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Review;
use App\Models\Service;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
//        $details = (new Appointment)->appointmentStore($request);
        try {
            $checkAppointmentExists = Appointment::where('appointmentDateTime', $request->dateTime)->first();
            if ($checkAppointmentExists) {
                return redirect()->back()->with('error', 'Appointment already exists on this time. Please choose another appointment time.');
            }
            $appointment = Appointment::Create([
                'name' => $request->name ?? null,
                'phone' => $request->phone ?? null,
                'email' => $request->email ?? null,
                'address' => $request->address ?? null,
                'city' => $request->city ?? null,
                'appointmentDateTime' => $request->dateTime ?? null,
                'appointmentDetail' => $request->message ?? null,
                'status' => 0,
                'category_id' => $request->category ?? null,
                'service_id' => $request->service ?? null,
            ]);
//            dd($appointment);
            if (isset($appointment)) {
            Mail::to('rj.mrauf@gmail.com')->send(new appointmentCreated($appointment));
//                Mail::to('mammaraltaf@gmail.com')->send(new appointmentCreated($appointment));
                return redirect()->back()->with('success','Appointment Created Successfully! We will contact you as soon as possible. If you are in hurry please call at 0347-5055405.');
            }
            return redirect()->back()->with('error','There was an error creating the appointment!');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function contactPost(Request $request){
        (new Contact())->contactStore($request);
        return redirect()->back()->with('success','Your message was sent successfully.');
    }

    public function registerProvider(){
        return view('frontend.registerProvider');
    }

    public function registerProviderPost(Request $request){
        try{
            $input = $request->all();
//            dd($input);

            $validation = \Validator::make($input, [
                'name' => 'required|string|max:255',
                'mobile'=> 'required|string|max:11',
                'cnic' => 'required|string|max:15',
                'city' => 'required|string|max:255',
                'area' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            if($validation->fails()){
                return redirect()->back()->with('error', $validation->errors());
            }

            User::create([
                'name' => $input['name'] ?? '',
                'mobile' => $input['mobile'] ?? '',
                'cnic' => $input['cnic'] ?? '',
                'area' => $input['area'] ?? '',
                'city' => $input['city'] ?? '',
                'email' => $input['email'] ?? '',
                'password' => Hash::make($input['password']),
                'role' => 0,
            ]);

            return redirect()->back()->with('success', 'User created successfully! You can only login once your account is approved by admin.');
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
