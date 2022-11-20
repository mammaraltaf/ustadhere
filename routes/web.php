<?php

use App\Models\Category;
use App\Models\Service;
use App\Models\Review;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*$facebook = App::make('app\social\facebook');
dd($facebook);*/
//
//Route::get('/', function () {
//    return view('test');
//});

Route::get('/', function () {
    $categories = Category::all();
    $services = Service::all();
    $reviews = Review::all();
    return view('frontend.index',compact('services','categories','reviews'));
})->name('frontend.home');

Route::get('registerProvider', [FrontendController::class, 'registerProvider'])->name('registerProvider');

Route::get('/about',[FrontendController::class,'about'])->name('frontend.about');
Route::get('/testimonials',[FrontendController::class,'testimonials'])->name('frontend.testimonials');
Route::get('/contact',[FrontendController::class,'contact'])->name('frontend.contact');
Route::get('/appointment',[FrontendController::class,'appointment'])->name('frontend.appointment');
Route::post('/appointment',[FrontendController::class,'appointmentPost'])->name('frontend.appointment.post');
Route::post('/contact',[FrontendController::class,'contactPost'])->name('frontend.contact.post');
//Route::get('/about',[FrontenedController::class,'about'])->name('frontend.about');
Route::get('getService/{id}', function ($id) {
    $service = App\Models\Service::where('category_id',$id)->get();
    return response()->json($service);
});

Route::get('/admin', function () {
    return view('admin.admin.app');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/index',[AdminController::class,'index'])->name('admin.index');
    /*Admin.Category*/
    Route::get('/admin/category',[AdminController::class,'category'])->name('admin.category');
    Route::post('/admin/category',[AdminController::class,'categoryPost'])->name('admin.categoryPost');
    Route::get('/admin/category-edit',[AdminController::class,'categoryEdit'])->name('admin.categoryEdit');
    Route::get('/admin/edit-category/{id}', [AdminController::class,'editCategory'])->name('admin.editCategory');
    Route::post('/admin/edit-category/{id}', [AdminController::class,'updateCategory'])->name('admin.updateCategory');
    Route::post('/admin/delete-category', [AdminController::class,'destroyCategory'])->name('admin.destroyCategory');

    /*Admin.Services*/
    Route::get('/admin/services',[AdminController::class,'services'])->name('admin.services');
    Route::post('/admin/services',[AdminController::class,'servicesPost'])->name('admin.servicesPost');
    Route::get('/admin/edit-service/{id}', [AdminController::class,'editService'])->name('admin.editService');
    Route::post('/admin/edit-service/{id}', [AdminController::class,'updateService'])->name('admin.updateService');
    Route::post('/admin/delete-service', [AdminController::class,'destroyService'])->name('admin.destroyService');

    /*Admin.Reviews*/
    Route::get('/admin/reviews',[AdminController::class,'reviews'])->name('admin.reviews');
    Route::post('/admin/reviews',[AdminController::class,'reviewsPost'])->name('admin.reviewsPost');
    Route::get('/admin/edit-review/{id}', [AdminController::class,'editReview'])->name('admin.editReview');
    Route::post('/admin/edit-review/{id}', [AdminController::class,'updateReview'])->name('admin.updateReview');
    Route::post('/admin/delete-review', [AdminController::class,'destroyReview'])->name('admin.destroyReview');

    /*Admin Contact*/
    Route::get('/admin/contact',[AdminController::class,'contact'])->name('admin.contact');

    /*Admin.Appointments*/
    Route::get('/admin/appointment',[AdminController::class,'appointment'])->name('admin.appointment');

    Route::post('/admin/invoice/{appointment_id}',[AdminController::class,'invoiceDetails'])->name('admin.invoiceDetails');
    Route::get('/admin/get-data/{id}', [AdminController::class,'getData'])->name('admin.getData');

    Route::get('/admin/downloadInvoice/{id}',[AdminController::class,'downloadInvoice'])->name('admin.downloadInvoice');
    Route::get('/admin/sendEmail/{id}',[AdminController::class,'sendEmail'])->name('admin.sendEmail');


//    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
//    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});


Route::get('/services', function () {
    return view('frontend.service');
})->name('frontend.service');

Route::get('/login', function () {
    return view('auth.login');
})->name('admin.login');

Auth::routes([
//    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];

    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\orderCompleted($details));

    dd("Email is Sent.");
});

Route::fallback(function() {
    return redirect()->route('frontend.home');
});

Route::get('/optimize', function () {
    \Artisan::call('optimize');
    return 'Application optimized!';
});

Route::get('/routeclear', function () {
    \Artisan::call('route:clear');
    \Artisan::call('route:cache');
    \Artisan::call('view:clear');
    \Artisan::call('view:cache');
//    Artisan::call('migrate --path=/database/migrations/2022_07_19_064703_create_upload_images_table.php');
    $mytime = Carbon\Carbon::now();
    echo $mytime->toDateTimeString();
    return 'Application route cleared!';
});
