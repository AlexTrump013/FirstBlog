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

Route::get('/', function () {
//    try {
//        DB::connection()->getPdo();
//        echo "Connected successfully to: " . DB::connection()->getDatabaseName();
//    } catch (\Exception $e) {
//        die("Could not connect to the database. Please check your configuration. error:" . $e );
//    }
//    die;
    //return view('welcom');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ajax/getData', 'Admin\AjaxTestController@getData')->name('ajaxGetData');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'Admin\DashboardController@index')->middleware('isallowed:view-admin-dashboard')->name('DashboardAdmin');
    Route::resource('posts', 'Admin\PostController');
    Route::resource('categories', 'Admin\CategoryController');
    Route::resource('tags', 'Admin\TagController');
    });

Route::get('/myBlog', 'MyBlog\DashboardController@index')->name('MyBlogController');

Route::prefix( 'myBlog')->group(function () {
    Route::get('/', 'MyBlog\DashboardController@index')->name('MyBlogDashboard');
    Route::resource('news', 'MyBlog\MyBlogController');
});




