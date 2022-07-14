<?php

namespace App\Http\Controllers;

use App\Mail\orderCompleted;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Invoice;
use Exception;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use App\Models\Review;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index(){
        $allAppointments = Appointment::all()->count();
        $pendingAppointments = Appointment::where('status',0)->get()->count();
        $completedAppointments = Appointment::where('status',1)->get()->count();
        $contactFormData = Contact::all()->count();
        return view('index',compact('allAppointments','pendingAppointments','completedAppointments','contactFormData'));
    }

    public function category(){
        $categories = Category::all();
        return view('admin.pages.category',['categories'=>$categories]);
    }

    public function categoryPost(Request $request){
        (new Category())->categoryPostModel($request);
        return redirect()->back()->with('success','Category Added Successfully!');
    }

    public function editCategory($id){
//        (new Category())->categoryEdit($id);
        $category = Category::find($id);
        return $category;
    }

    public function updateCategory(Request $request, $id){
        (new Category())->categoryEditPost($request,$id);
        return redirect()->back()->with('success','Category Updated Successfully!');
    }

    public function destroyCategory(Request $request){
        try{
            Category::where('id',$request->id)->delete();
            return redirect()->back()->with('success','Category deleted Successfully');
        }
        catch(Exception $e){
            return $e->getMessage();
        }

    }

    public function services(){
        try{
        $categories = Category::all();
        $services = Service::all();
        return view('admin.pages.services',['categories'=>$categories,'services'=>$services]);
    }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function servicesPost(Request $request){
        (new service())->servicePostModel($request);
        return redirect()->back()->with('success','Service Added Successfully!');
    }

    public function editService($id){
        $service = Service::find($id);
        return $service;
    }

    public function updateService(Request $request, $id){
        (new service())->serviceEditPost($request,$id);
        return redirect()->back()->with('success','Service Updated Successfully!');
    }

    public function destroyService(Request $request){
        try{
            Service::where('id',$request->id)->delete();
            return redirect()->back()->with('success','Service deleted Successfully');
        }
        catch(Exception $e){
            return $e->getMessage();
        }

    }

    public function reviews(){
        try{
        $reviews = Review::all();
        $services = Service::all();
        return view('admin.pages.reviews',compact('services','reviews'));
    }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function reviewsPost(Request $request){
        (new review())->reviewPostModel($request);
        return redirect()->back()->with('success','Review Added Successfully!');
    }

    public function editReview($id){
        $review = Review::find($id);
        return $review;
    }

    public function updateReview(Request $request, $id){
        (new review())->reviewEditPost($request,$id);
        return redirect()->back()->with('success','Review Updated Successfully!');
    }

    public function destroyReview(Request $request){
        try{
            Review::where('id',$request->id)->delete();
            return redirect()->back()->with('success','Review deleted Successfully');
        }
        catch(Exception $e){
            return $e->getMessage();
        }

    }

    public function appointment(){
        try{
        $appointments = Appointment::all();
        return view('admin.pages.appointment',['appointments'=>$appointments]);
    }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function getData($id){
        $appointment = Appointment::find($id);
        return $appointment;
    }

    public function invoiceDetails(Request $request,$id){
        try{
            $appointment = Appointment::where('id',$id)->update(['status'=>'1']);
            $invoice = Invoice::firstOrCreate([
                'appointment_id'=>$id,
                'invoiceNumber'=>$request->invoiceNumber ?? '',
                'invoiceDateTime'=>$request->dateTime ?? '',
                'amount'=>$request->amount ?? '',
            ]);
            return redirect()->back();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function downloadInvoice($id)
    {
//        $appointment = Appointment::find($id);
//        $invoice = Invoice::where('appointment_id',$appointment->id)->first();
//        return view('receipt.index',compact('appointment','invoice'));
        $appointment = Appointment::find($id);
        $invoice = Invoice::where('appointment_id',$appointment->id)->first();
        $pdf = PDF::loadView('receipt.index', compact('appointment','invoice'));
        return $pdf->stream('invoice.pdf');
    }

    public function sendEmail($id){
        try{
            $appointment = Appointment::find($id);
            $invoice = Invoice::where('appointment_id',$appointment->id)->first();
            $details = $appointment;
            $appointment = Appointment::find($id);
            $invoice = Invoice::where('appointment_id',$appointment->id)->first();
            $pdf = PDF::loadView('receipt.index', compact('appointment','invoice'));
            $message = new orderCompleted($details);
            $message->attachData($pdf->output(), "invoice.pdf");
            Mail::to($appointment->email)->send($message);
//        Mail::to($appointment->email)->send(new orderCompleted($details));
            return redirect()->back()->with('success','Email sent successfully!');
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function contact(){
        $contacts = Contact::all();
        return view('admin.pages.contact',['contacts'=>$contacts]);
    }


}
