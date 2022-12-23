<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/introduction', 'IntroductionController@index')->name('introduction');
Route::get('/pay', 'PayController@index')->name('pay');
Route::get('/privacy-policy', 'PrivacyPolicyController@index')->name('privacy-policy');
Route::get('/terms-of-use', 'PrivacyPolicyController@termsOfUse')->name('terms-of-use');

Route::get('/component', function () {
    return view('component');
});
