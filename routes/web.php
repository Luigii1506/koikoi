<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session; //Here
use App\Http\Controllers\SendEmailController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/design', function () {
    return view('design');
});

Route::get('/web', function () {
    return view('web');
});

Route::get('/us', function () {
    return view('us');
});

Route::get('/animation', function () {
    return view('animation');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale',$locale);
    return redirect()->back();
});

Route::post('/sendmail', [SendEmailController::class, 'send']);


