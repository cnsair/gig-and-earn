<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FindJobController;
use App\Http\Controllers\HomeRendererController;
use App\Http\Controllers\PostjobController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UploadController;
use App\Models\Upload;
use Illuminate\Support\Facades\Route;


//=======================================
//Guest/Homepage Routes
//=======================================

Route::middleware('guest')->group(function () {

    // Home Landing page
    Route::get('/',  [HomeRendererController::class, 'HomeRenderer'])
        ->name('home');

    // Find Jobs page
    Route::get('/find-job',  [FindJobController::class, 'HomeRenderer'])
        ->name('find-job');

    // How It Works
    Route::get('/how-it-works', function () {
        return view('home.how-it-works');
    })->name('how-it-works');

    //Contact Us
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


    //=========================================================================
    // Common pages
    //=========================================================================
    // Create page
    Route::get('/common/post-job', [PostjobController::class, 'create'])
        ->name('job.create');
    
    //Store action
    Route::post('/common/post-job', [PostjobController::class, 'store'])
        ->name('job.store');
    
    //Show page
    Route::get('/common/show-job', [PostjobController::class, 'show'])
        ->name('job.show');

    //Edit page
    Route::get('/common/{job}/edit-job', [PostjobController::class,'edit'])
        ->name('job.edit');

    //Update action
    Route::patch('/common/{job}/edit-job', [PostjobController::class, 'update'])
        ->name('job.update');

    //delete action
    Route::delete('/common/{job}/show-job', [PostjobController::class, 'destroy'])
        ->name('job.destroy');


    //===============================================================================
    // Admin
    //===============================================================================

    Route::group(['middleware' => 'admin'], function() {
        
        //Collect data and render all
        Route::get('/admin/dashboard', [DashboardController::class, 'showInDashboard'])
            ->name('admin.dashboard');
        
        //===========================================================================
        // Video uploads

        // create page
        Route::get('/admin/upload',  [UploadController::class, 'create'])
            ->name('upload.create');

        //store action
        Route::post('/admin/upload', [UploadController::class, 'store'])
            ->name('upload.store');
        
        //Show page
        Route::get('/admin/show', [UploadController::class, 'show'])
            ->name('upload.show');

        //Edit page
        Route::get('/admin/{upload}/edit', [UploadController::class,'edit'])
            ->name('upload.edit');
    
        //Update action
        Route::patch('/admin/{upload}/edit', [UploadController::class, 'update'])
            ->name('upload.update');
    
        //delete action
        Route::delete('/admin/{upload}/show', [UploadController::class, 'destroy'])
            ->name('upload.destroy');

        //Toggle betweeen Show and Hide Upload
        Route::put('/admin/{upload}/show', function (Upload $upload){
            $upload->toggleStatus();
            return redirect()->back()->with('success','done');
        })->name('upload.toggle');


        //===========================================================================================

        // Create book page
        Route::get('/admin/add-book', [BookController::class, 'create'])
        ->name('book.create');

        // Store book page
        Route::post('/admin/add-book', [BookController::class, 'store'])
        ->name('book.store');

        // Show book page
        Route::get('/admin/show-book', [BookController::class, 'show'])
        ->name('book.show');

        //Edit page
        Route::get('/admin/{book}/edit-book', [BookController::class,'edit'])
            ->name('book.edit');

        //Update action
        Route::patch('/admin/{book}/edit-book', [BookController::class, 'update'])
            ->name('book.update');
    
        //delete action
        Route::delete('/admin/{book}/show-book', [BookController::class, 'destroy'])
            ->name('book.destroy');

    });


    //===================================================================================
    //Must be Member
    //==================================================================================
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
        
        //Show page
        // Route::get('/member/show-job', [PostjobController::class, 'show'])
        //     ->name('member.job.show');

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
