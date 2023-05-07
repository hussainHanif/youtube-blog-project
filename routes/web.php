<?php

use App\Http\Controllers\ContactUsController;
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

// Route::group(['prefix' => 'en'], function () {
//     // English routes here
//     App::setLocale('en');
//     Route::get('/', function () {
//         return view('welcome');
//     });

// });

// Route::group(['prefix' => 'fr'], function () {
//     // French routes here
//     App::setLocale('fr');
//     Route::get('/', function () {
//         return view('welcome');
//     });
// });

Route::get('/{locale}', function (string $locale) {
    $languages = ['en', 'es', 'fr'];
    if (!in_array($locale, $languages)) {
        abort(400);
    }
    App::setLocale($locale);
        return view('welcome');
});
