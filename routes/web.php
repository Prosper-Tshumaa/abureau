<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BotManController;

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

//Common app routes

//index - home page
//About page
//Services page
//About page
//contact page
//Pricing page

//Users and admin-

//Create user form
//Create user
//User logout
//Log in user form
//log in user
//user dashboard
//Admin dasboard


//Home page
Route::get('/', function () {
    return view('index');
});

//About page
Route::get('/pages/about', function () {
    return view('pages.about');
});

//Services
Route::get('/pages/services', function () {
    return view('pages.services');
});

//Prices
Route::get('/pages/pricing', function () {
    return view('pages.pricing');
});

//Contact
Route::get('/pages/contact', function () {
    return view('pages.contact');
});

//Subjects
Route::get('/pages/subjects', function () {
    return view('pages.subjects');
});

//Team
Route::get('/pages/team', function () {
    return view('pages.team');
});

//faq
Route::get('/pages/faq', function () {
    return view('pages.faq');
});

//Terms
Route::get('/pages/terms', function () {
    return view('pages.terms');
});

//Privacy policy
Route::get('/pages/privacypolicy', function () {
    return view('pages.privacypolicy');
});

//Login User
Route::get('/users/login', function () {
    return view('users.login');
});

//Register User
Route::get('/users/register', function () {
    return view('users.register');
});

//Coaching page
Route::get('/pages/coaching', function () { 
    return view('pages.coaching');
});



require __DIR__.'/auth.php';

