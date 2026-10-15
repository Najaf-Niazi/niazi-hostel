<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use App\Models\WebsiteContentItem;
use App\Models\Room;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminImageController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\AdminAdmissionController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminRoomController;
use App\Http\Controllers\AdminWebsiteContentController;


/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
|--------------------------------------------------------------------------
*/


Route::get('/', function () {

    $contentItems = WebsiteContentItem::where('page', 'home')
        ->get()
        ->keyBy('content_key');

    return view('index', compact('contentItems'));

})->name('home');


Route::get('/about', function () {

    $items = WebsiteContentItem::where('page', 'about')
        ->get()
        ->keyBy('content_key');

    return view('about', compact('items'));

})->name('about');


Route::get('/facilities', function () {

    $items = WebsiteContentItem::where('page', 'facilities')
        ->get()
        ->keyBy('content_key');

    return view('facilities', compact('items'));

})->name('facilities');


Route::get('/contact', function () {

    return view('contact');

})->name('contact');


Route::get('/admission', function () {

    $rooms = Room::where('status', 'available')
        ->orderBy('room_number')
        ->get();

    return view('admission', compact('rooms'));

})->name('admission');


Route::post('/admission', [AdmissionController::class, 'store'])
    ->name('admission.store');



/*
|--------------------------------------------------------------------------
| ADMIN ROOT
|--------------------------------------------------------------------------
*/


Route::get('/admin', function () {

    if (Auth::check()) {

        return redirect()
            ->route('admin.dashboard');
    }

    return redirect()
        ->route('admin.login.form');

})->name('admin.root');



/*
|--------------------------------------------------------------------------
| DEFAULT LOGIN REDIRECT
|--------------------------------------------------------------------------
| Laravel auth middleware looks for route('login').
|--------------------------------------------------------------------------
*/


Route::get('/login', function () {

    return redirect()
        ->route('admin.login.form');

})->name('login');



/*
|--------------------------------------------------------------------------
| ADMIN LOGIN
|--------------------------------------------------------------------------
| Public routes
|--------------------------------------------------------------------------
*/


Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login.form');


Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login');



/*
|--------------------------------------------------------------------------
| ADMIN PASSWORD CHANGE / RECOVERY
|--------------------------------------------------------------------------
| These stay outside auth middleware because they are opened
| from the login page.
|--------------------------------------------------------------------------
*/


Route::get('/admin/change-password', [AdminAuthController::class, 'showChangePassword'])
    ->name('admin.password.form');


Route::post('/admin/change-password', [AdminAuthController::class, 'updatePassword'])
    ->name('admin.password.update');



/*
|--------------------------------------------------------------------------
| PROTECTED ADMIN ROUTES
|--------------------------------------------------------------------------
| Login required for everything below.
|--------------------------------------------------------------------------
*/


Route::middleware('auth')->group(function () {


    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */


    Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])
        ->name('admin.dashboard');



    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */


    Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
        ->name('admin.logout');



    /*
    |--------------------------------------------------------------------------
    | ADMISSIONS
    |--------------------------------------------------------------------------
    */


    Route::get('/admin/admissions', [AdminAdmissionController::class, 'index'])
        ->name('admin.admissions.index');


    Route::get('/admin/admissions/{admission}', [AdminAdmissionController::class, 'show'])
        ->name('admin.admissions.show');


    Route::patch('/admin/admissions/{admission}/approve', [AdminAdmissionController::class, 'approve'])
        ->name('admin.admissions.approve');


    Route::patch('/admin/admissions/{admission}/reject', [AdminAdmissionController::class, 'reject'])
        ->name('admin.admissions.reject');


    Route::delete('/admin/admissions/{admission}', [AdminAdmissionController::class, 'destroy'])
        ->name('admin.admissions.destroy');



    /*
    |--------------------------------------------------------------------------
    | STUDENTS
    |--------------------------------------------------------------------------
    */


    Route::get('/admin/students', [AdminStudentController::class, 'index'])
        ->name('admin.students.index');


    Route::delete('/admin/students/{student}', [AdminStudentController::class, 'destroy'])
        ->name('admin.students.destroy');



    /*
    |--------------------------------------------------------------------------
    | ROOMS
    |--------------------------------------------------------------------------
    */


    Route::get('/admin/rooms', [AdminRoomController::class, 'index'])
        ->name('admin.rooms.index');


    Route::post('/admin/rooms', [AdminRoomController::class, 'store'])
        ->name('admin.rooms.store');


    Route::put('/admin/rooms/{room}', [AdminRoomController::class, 'update'])
        ->name('admin.rooms.update');


    Route::delete('/admin/rooms/{room}', [AdminRoomController::class, 'destroy'])
        ->name('admin.rooms.destroy');



    /*
    |--------------------------------------------------------------------------
    | WEBSITE CONTENT
    |--------------------------------------------------------------------------
    */


    Route::get('/admin/content', [AdminWebsiteContentController::class, 'index'])
        ->name('admin.content.index');


    Route::post('/admin/content/restore', [AdminWebsiteContentController::class, 'restoreOriginal'])
        ->name('admin.content.restore');


    Route::post('/admin/content/save-all', [AdminWebsiteContentController::class, 'saveAll'])
        ->name('admin.content.saveAll');



    /*
    |--------------------------------------------------------------------------
    | STUDENT IMAGES
    |--------------------------------------------------------------------------
    */


    Route::get('/admin/images', [AdminImageController::class, 'index'])
        ->name('admin.images.index');
});
Route::post('/contact/send', [ContactController::class, 'send'])
    ->name('contact.send');
/*
|--------------------------------------------------------------------------
| TEST EMAIL
|--------------------------------------------------------------------------
| Development only.
|--------------------------------------------------------------------------
*/


Route::get('/test-email', function () {

    Mail::raw(
        'Niazi Hostel SMTP test email successfully sent.',
        function ($message) {

            $message->to('najaffalii786@gmail.com')
                ->subject('Niazi Hostel SMTP Test');

        }
    );

    return 'Email sent successfully.';

});