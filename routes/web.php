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


Route::get('/', function (){
    return view('home');
});

Auth::routes();

Route::get('/', function (){
    return view('home');
});



/*Route::get('/', 'HomeController@index')->name('home');*/


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

Route::get('newsletter', 'NewsletterController@newsletter')->name('newsletter');



Route::get('posts', 'PostController@index')->name('posts');
Route::get('post/add', 'PostController@create')->name('add.post');
Route::post('post/store', 'PostController@store')->name('store.post');

//Action
Route::get('post/delete/{id}', 'PostController@delete');
Route::get('post/edit/{id}', 'PostController@edit');

Route::post('post/update/{id}', 'PostController@update')->name('update.post');
Route::post('post/update/nophoto/{id}', 'PostController@PostUpdateNoPhoto')->name('update.postnophoto');
Route::post('post/update/photo/{id}', 'PostController@PostUpdatePhoto')->name('update.postphoto');

// Blog Admin All
    Route::get('blog/category/list', 'BlogController@blogCatList')->name('blog.categorylist');

    Route::post('store/blog', 'BlogController@storeBlogCat')->name('store.blog.category');

// 'delete/blogcategory/'
    Route::get('delete/blogcategory/{id}', 'BlogController@deleteBlogCat');
    Route::get('edit/blogcategory/{id}', 'BlogController@editBlogCat');

    Route::post('update/blog/category/{id}', 'BlogController@updateBlogCat');

    Route::get('add/blogpost', 'BlogController@createBlogPost')->name('add.blogpost');



    Route::get('all/blogposts', 'BlogController@index')->name('all.blogposts');


    Route::post('store/blogpost', 'BlogController@storeBlogPostImage')->name('store.blogpost_image');

    Route::get('delete/blogpost/{id}', 'BlogController@deleteBlogPost');

    Route::get('edit/blogpost/{id}', 'BlogController@editBlogPost');





//Route::post('edit/post/{id}', 'Admin\PostController@editPost');
    Route::post('update/blogpost/{id}', 'BlogController@updateBlogPost');




}
);





// FrontEnd Routes

// Author Group
Route::group([



    'middleware' =>['auth', 'author']],
    function (){
        Route::get('/', 'HomeController@index')->name('home');

        Route::post('store/newsletter', 'NewsletterController@newsletter')->name('store.newsletter');
        Route::post('/', 'HomeController@login');




    }




);


Route::get('allposts', 'Author\PostController@posts')->name('to_all_posts');

