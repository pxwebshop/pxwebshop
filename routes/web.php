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

Route::get('/login', 'UserController@login')->name('login');
Route::post('/login', 'UserController@postLogin')->name('post_login');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/logout', 'UserController@logout')->name('logout');

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'Admin\BlogController@index')->name('list_blog');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', 'Admin\CategoryController@index')->name('categories');
        Route::post('/', 'Admin\CategoryController@addCategory')->name('add_category');
        
    });
});


Route::get('/component', function () {
    return view('component');
});
