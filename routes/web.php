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
Route::post('/', 'HomeController@postForm')->name('register');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@postContact');
Route::get('/introduction', 'IntroductionController@index')->name('introduction');
Route::get('/pay', 'PayController@index')->name('pay');
Route::get('/privacy-policy', 'PrivacyPolicyController@index')->name('privacy-policy');
Route::get('/terms-of-use', 'PrivacyPolicyController@termsOfUse')->name('terms-of-use');
Route::get('/blog', 'BlogController@blog')->name('blog');

Route::get('/login', 'Admin\UserController@login')->name('login');
Route::post('/login', 'Admin\UserController@postLogin')->name('post_login');

Route::group(['prefix' => 'blog'], function () {
    Route::get('/{id}', 'BlogController@detail')->name('blog_detail');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/logout', 'Admin\UserController@logout')->name('logout');

    Route::get('/contact', 'Admin\ContactController@contact')->name('contact');
    Route::get('/{id}/cancel-contact', 'Admin\ContactController@cancelApprove')->name('cancel_approve');
    Route::get('/{id}/approve', 'Admin\ContactController@approve')->name('approve');

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'Admin\UserController@users')->name('list_users');
        Route::post('/', 'Admin\UserController@postCreate');
        Route::get('/profile', 'Admin\UserController@profile')->name('profile');
        Route::post('/profile', 'Admin\UserController@postProfile');

        Route::get('/edit/{id}', 'Admin\UserController@edit')->name('edit_account');
        Route::post('/edit/{id}', 'Admin\UserController@postEdit')->name('post_edit_account');
        Route::get('/delete/{id}', 'Admin\UserController@delete')->name('delete_account');
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'Admin\BlogController@index')->name('list_blog');
        Route::get('/add', 'Admin\BlogController@add')->name('add_blog');
        Route::post('/add', 'Admin\BlogController@postAdd');
        Route::get('/{id}/edit', 'Admin\BlogController@edit')->name('edit_blog');
        Route::post('/{id}/edit', 'Admin\BlogController@postEdit');
        Route::get('/{id}/delete', 'Admin\BlogController@delete')->name('delete_blog');

        Route::get('/outstanding', 'Admin\BlogController@outstanding')->name('outstanding');
        Route::post('/outstanding', 'Admin\BlogController@postOutstanding');
        
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', 'Admin\CategoryController@index')->name('categories');
        Route::post('/', 'Admin\CategoryController@addCategory')->name('add_category');
        Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('edit_category');
        Route::post('/{id}/edit', 'Admin\CategoryController@postEdit');
        Route::get('/{id}/delete', 'Admin\CategoryController@delete')->name('delete_category');
    });

    // Route::group(['prefix' => 'order'], function () {
    //     Route::get('/', 'Admin\OrderController@index')->name('list_order');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/component', function () {
    return view('component');
});
