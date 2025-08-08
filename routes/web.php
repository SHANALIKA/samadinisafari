<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Public Static Pages
|--------------------------------------------------------------------------
*/
Route::view('/', 'welcome');
Route::view('/welcome', 'welcome');
Route::view('/gallary', 'gallary');
Route::view('/map', 'map');
Route::view('/success', 'success')->name('booking.success');

/*
|--------------------------------------------------------------------------
| Signup (Registration)
|--------------------------------------------------------------------------
*/

Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup.form');

// Process signup form submission
Route::post('/signup', [SignupController::class, 'signup'])->name('signup.submit');
/*
|--------------------------------------------------------------------------
| Login & Logout
|--------------------------------------------------------------------------
*/
Route::get('/signin', [LoginController::class, 'showLoginForm'])->name('signin');
Route::post('/signin', [LoginController::class, 'login'])->name('signin.post');

Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/signin');
})->name('logout');

/*
|--------------------------------------------------------------------------
| Booking Pages (Protected)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/booking', function () {
        return view('booking');
    })->name('booking');

    Route::post('/booking', [BookingController::class, 'store'])->name('bookingform.submit');
});


/*
|--------------------------------------------------------------------------
| Facebook Login (Social Auth)
|--------------------------------------------------------------------------
*/
Route::get('/auth/facebook', [FacebookController::class, 'redirectToFacebook'])->name('login.facebook');

Route::get('/auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);
