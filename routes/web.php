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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// МОИ РОУТЫ
// 1 route на ссылку открытия страницы смены пороля
Route::get('/change-password', 'Auth\ChangePasswordController@index')->name('password.change');
// route на страницу обработки пароля
Route::post('/change-password', 'Auth\ChangePasswordController@changePassword')->name('password.update');


// Admin Group
Route::group([
    'as'=>'admin.',
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' =>['auth', 'admin']],
    function (){
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::get('logout', 'DashboardController@logout')->name('logout');
Route::get('categories/', 'CategoryController@index')->name('categories');
Route::post('store/category', 'CategoryController@store')->name('store.category');
Route::get('delete/category/{id}', 'CategoryController@delete');
Route::get('edit/category/{id}', 'CategoryController@edit');
Route::post('update/category/{id}', 'CategoryController@update');






    }
);














// Author Group
Route::group([
    'as'=>'author.',
    'prefix' => 'author',
    'namespace' => 'Author',
    'middleware' =>['auth', 'author']],
    function (){
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/', function () {
    return view('welcome');
});