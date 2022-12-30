<?php

use Illuminate\Support\Facades\Auth;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/change-password', 'Auth\ChangePasswordController@change_password')->name('password.change');

Route::post('/change-password', 'Auth\ChangePasswordController@update_password')->name('password.update');

/*ADMIN ROUTES*/

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');




});

/*USER ROUTES*/

Route::group(['middleware' => ['auth', 'user']], function(){
    Route::get('/', 'User\FrontController@index')->name('user.home');


});