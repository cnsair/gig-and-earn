<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UploadController;
use App\Models\Upload;
use Illuminate\Support\Facades\Route;


//=======================================
//Guest/Homepage Routes
//=======================================

Route::middleware('guest')->group(function () {


    Route::get('/', function () {
        return view('home.home');
    })->name('home');

    Route::get('/find-job', function () {
        return view('home.find-job');
    })->name('find-job');

    Route::get('/how-it-works', function () {
        return view('home.how-it-works');
    })->name('how-it-works');

    Route::get('/contact-us', function () {
        return view('home.contact-us');
    })->name('contact-us');

    
});



//===================================================
//      AUTHENTICATION REDIRECTS
//==================================================

Route::group(['middleware' => 'auth'], function() {

    //Main Redirect Controller
    Route::get('redirects', [
        RedirectController::class, 'index'
    ]);


    //===========================
    //Must be Admin
    //===========================
    Route::group(['middleware' => 'admin'], function() {
        
        //Show in Show Dashboard
        Route::get('/admin/dashboard', [DashboardController::class, 'showInDashboard'])
            ->name('admin.dashboard');
        
        //Show in Show Dashboard
        Route::get('/admin/show', [ShowController::class, 'showInAdmin'])
            ->name('upload.show');

        // //view upload page
        Route::get('/admin/upload',  [UploadController::class, 'create'])
            ->name('upload.create');

        //view upload page
        Route::post('/admin/upload', [UploadController::class, 'store'])
            ->name('upload.store');

        //Edit page
        Route::get('/admin/{upload}/edit', [UploadController::class,'edit'])
            ->name('upload.edit');
    
        //Update
        Route::patch('/admin/{upload}/edit', [UploadController::class, 'update'])
            ->name('upload.update');
    
        //delete
        Route::delete('/admin/{upload}/edit', [UploadController::class, 'destroy'])
            ->name('upload.destroy');


        //Toggle betweeen Show and Hide Upload
        Route::put('/admin//{upload}show', function (Upload $upload){
        
            $upload->toggleStatus();
            return redirect()->back()->with('success','done');
            
        })->name('upload.toggle');

    });


    //===========================
    //Must be Member
    //===========================
    Route::group(['middleware' => 'member'], function() {

        //view dashboard
        Route::get('/member/dashboard', function () {
            return view('member.dashboard'); })
            ->name('member.dashboard');

        //view payment page
        Route::get('/member/full-access', function () {
            return view('member.full-access'); })
            ->name('member.full-access');

        //view payment page
        Route::get('/member/testimonial', function () {
            return view('member.testimonial'); })
            ->name('member.testimonial');

    });

});

//view installed PHP information
Route::get('/phpinfo', function() {
    phpinfo();
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        // return view('dashboard');
        // return redirect()->route('redirects');
        abort(403, 'Unauthorised action!');
    })->name('dashboard');
});
