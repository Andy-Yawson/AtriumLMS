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

Route::get('/', 'HomeController@welcome')->name('user.welcome');
Route::get('/detail', 'HomeController@detail')->name('user.detail');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function (){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

    //Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    //========== Roles controller ===========
    Route::resource('roles','RolesController');

    //=========== Users controller ============
    Route::resource('users','UsersController');

    //============ Courses Controller =============
    Route::resource('courses','CoursesController');

    //=============== Lessons Controller ==========
    Route::get('/lessons/create/{id}','LessonsController@create')->name('lessons.create');
    Route::get('/lessons/index','LessonsController@index')->name('lessons.index');
    Route::get('/lessons/edit/{id}','LessonsController@edit')->name('lessons.edit');
    Route::post('/lessons/create','LessonsController@store')->name('lessons.store');
    Route::put('/lessons/update/{id}','LessonsController@update')->name('lessons.update');
    Route::delete('/lessons/destroy/{id}','LessonsController@destroy')->name('lessons.destroy');

});
