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

Route::get('/','App\Http\Controllers\HomeController@index')->name("home");

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'superadmin', 'middleware' => ['auth' => 'superadmin']], function() {
    Route::get('/', ['as'=>'superadmin', function () {
        return view('superadmin.dashboard');
    }]);
    Route::get('register', ['as'=>'register', function () {
        return view('superadmin.register');
    }]);
    Route::get('/users','App\Http\Controllers\superadmin\UserController@index')->name("users");
    Route::post('/register','App\Http\Controllers\superadmin\UserController@store')->name("user.register");
    Route::get('/users/edit/{user}','App\Http\Controllers\superadmin\UserController@edit');
    Route::patch('/users/edit/{user}','App\Http\Controllers\superadmin\UserController@update');
   

});
Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'admin']], function() {
    Route::get('/', ['as'=>'admin', function () {
        return view('superadmin.dashboard');
    }]);

    Route::get('notifications','App\Http\Controllers\superadmin\NotificationController@index')->name('notifications.all');
    Route::resource('page','App\Http\Controllers\superadmin\PageController',['names'=>'superadmin.page']);
    Route::resource('blog','App\Http\Controllers\superadmin\BlogController',['names'=>'superadmin.blog']);
    Route::resource('cat','App\Http\Controllers\ImageController',['names'=>'cat']);
    Route::get('/images/{id}','App\Http\Controllers\ImageController@create_image')->name("image.create");
    Route::post('/images','App\Http\Controllers\ImageController@store_image')->name("image.store");
    Route::delete('/images/{id}','App\Http\Controllers\ImageController@destroy_image')->name("image.destroy");
    Route::get('/subscriptions','App\Http\Controllers\SubscriptionController@index')->name("subscribe.index");

});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/showcase','App\Http\Controllers\ImageCatController@index')->name("gallery");
Route::post('/contact','App\Http\Controllers\contactController@send_mail')->name("send.mail");
Route::get('/images/{id}','App\Http\Controllers\ImageCatController@viewImages')->name("view.images");
Route::get('/news','App\Http\Controllers\news@index')->name('all.news');
Route::get('/news/{id}','App\Http\Controllers\news@show')->name('story');
Route::get('/search','App\Http\Controllers\SearchController@search')->name("search");
Route::get('/{page}','App\Http\Controllers\superadmin\PageController@page')->name("page");
Route::post('/subscribe','App\Http\Controllers\SubscriptionController@store')->name("subscribe.store");

