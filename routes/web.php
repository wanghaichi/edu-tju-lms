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
use App\User;

Route::get('/home', function(){
    return view('home');
})->name('home');
Route::get('/', function(){
    return redirect()->route('home');
});
Route::get('/test', function(){
    Auth::logout();
//    User::create([
//        'name' => 'whc',
//        'password' => bcrypt('hhxxttxs')
//    ]);
});

//Route::group(['prefix' => 'course'], function(){
//    Route::group(['middleware' => 'auth'], function(){
//        Route::post('/', 'CourseController@store');
//        Route::match(['patch', 'put'], '/{course}', 'CourseController@update');
//        Route::delete('/{course}', 'CourseController@destroy');
//        Route::get('/', 'CourseController@index');
//        Route::get('/create', 'CourseController@create');
//        Route::get('/{course}', 'CourseController@show');
//        Route::get('/{course}/edit', 'CourseController@edit');
//    });
//});

Route::group(['prefix' => 'reservation'], function(){
    Route::group(['middleware' => 'auth'], function(){
        Route::post('/', 'ReservationController@store');
        Route::match(['patch', 'put'], '/{reservation}', 'ReservationController@update');
        Route::delete('/{reservation}', 'ReservationController@destroy');

        Route::get('/', 'ReservationController@index');
        Route::get('/create', 'ReservationController@create');
        Route::get('/{reservation}', 'ReservationController@show');
        Route::get('/{reservation}/edit', 'ReservationController@edit');
        Route::post('/conflict', 'ReservationController@conflict');
    });
});

//Auth::routes();
Route::group(['prefix' => 'admin'], function(){

    Route::group(['middleware' => 'auth.admin'], function (){
        Route::get('/', 'AdminController@index');
        Route::group(['prefix' => 'reservation'], function(){
            Route::get('/course', 'AdminController@course');
            Route::get('/course/{courseId}', 'AdminController@courseEdit');
            Route::post('/course/{courseId}', 'AdminController@courseUpdate');
//        Route::get('/', 'AdminController@reservation');
        });

        Route::group(['prefix' => 'teacher'], function(){
            Route::get('/', 'AdminController@teacher');
            Route::post('/{teacherId}', 'AdminController@teacherUpdate');
            Route::get('/{teacherId}/edit', 'AdminController@teacherEdit');
            Route::get('/{teacherId}/delete', 'AdminController@teacherDelete');
            Route::get('/add', 'AdminController@teacherAdd');
            Route::post('/', 'AdminController@teacherStore');
        });

        Route::get('/logout', function(){
            Auth::logout();
            return redirect('/');
        });
    });
    Route::get('/login', function(){
        return view('admin.login');
    })->name('login');
});
Route::post('/login', 'Auth\LoginController@login');
Route::group(['prefix' => 'student'], function(){
    Route::get('/', 'StudentController@index');
});