<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\YoutubeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

Route::post('/contact-us', [ContactUsController::class, 'submitContactUsForm']);
// Route::post('/appendYoutubeOptions', [YoutubeController::class, 'appendYoutubeOptions']);
Route::post('/appendYoutubeOptions', [YoutubeController::class, 'appendYoutubeOptions'])->middleware('throttle:5,1');

Route::get('/', function () {
    App::setLocale('en');
    return view('app');
});


Route::get('/en', function () {
        App::setLocale('en');
    return view('app');
});

Route::get('/fr', function () {
    App::setLocale('fr');
return view('app');
});

Route::get('/es', function () {
    App::setLocale('es');
return view('app');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/youtube-download', function () {
    return view('app');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});