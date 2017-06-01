<?php

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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('/course', 'Course\IndexController@index')->middleware('auth');

Route::get('/test', function(){
    return \App\Models\Course::create([
        'name' => 'math',
        'number' => '136',
        'description' => 'hhh'
    ]);
})->middleware('auth');

Route::group(['prefix' => 'course'], function(){
    Route::group(['middleware' => 'auth'], function(){
        Route::post('/', 'CourseController@store');
        Route::match(['patch', 'put'], '/{course}', 'CourseController@update');
        Route::delete('/{course}', 'CourseController@destroy');
    });
    Route::get('/', 'CourseController@index');
    Route::get('/create', 'CourseController@create');
    Route::get('/{course}', 'CourseController@show');
    Route::get('/{course}/edit', 'CourseController@edit');
});

Route::group(['prefix' => 'reservation'], function(){
//    Route::group(['middleware' => 'auth'], function(){
        Route::post('/', 'ReservationController@store');
        Route::match(['patch', 'put'], '/{reservation}', 'ReservationController@update');
        Route::delete('/{reservation}', 'ReservationController@destroy');
//    });
    Route::get('/', 'ReservationController@index');
    Route::get('/create', 'ReservationController@create');
    Route::get('/{reservation}', 'ReservationController@show');
    Route::get('/{reservation}/edit', 'ReservationController@edit');

    Route::post('/conflict', 'ReservationController@conflict');

});
//Auth::routes();
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@index');
});

Route::get('hh', function(){
    return "hh";
})->middleware('auth');