<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category/{id}', 'App\Http\Controllers\HomeController@category')->name('category');
Route::get('/view-post/{id}', 'App\Http\Controllers\HomeController@single')->name('view-post');
Route::get('/contact-us', 'App\Http\Controllers\HomeController@contactUs')->name('contact');
Route::post('/send-email', 'App\Http\Controllers\HomeController@sendEmail')->name('sendEmail');
Route::get('/founder', 'App\Http\Controllers\HomeController@founder')->name('founder');
Route::get('/mission', 'App\Http\Controllers\HomeController@mission')->name('mission');
Route::get('/history', 'App\Http\Controllers\HomeController@history')->name('history');
// Route::prefix('dashboard')->name('dashboard.')->group(function(){
    Route::middleware('auth:web')->group(function(){

        //DASHBORD HOME
        Route::group(['middleware'=>'verified'], function(){

        Route::get('dashboard/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard-home');


        // CATEGORIES
        Route::get('dashboard/all-categories', 'App\Http\Controllers\CategoryController@index')->name('all-categories');
        Route::get('dashboard/add-category', 'App\Http\Controllers\CategoryController@create')->name('add-category');
        Route::post('dashboard/save-category', 'App\Http\Controllers\CategoryController@store')->name('save-category');
        Route::get('dashboard/edit-category/{id}', 'App\Http\Controllers\CategoryController@edit')->name('edit-category');
        Route::post('dashboard/update-category/{id}', 'App\Http\Controllers\CategoryController@update')->name('update-category');
        Route::get('dashboard/delete-category/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('delete-category');

        //Event
        Route::get('dashboard/all-events', 'App\Http\Controllers\EventController@index')->name('all-events');
        Route::get('dashboard/add-event', 'App\Http\Controllers\EventController@create')->name('add-event');
        Route::post('dashboard/save-event', 'App\Http\Controllers\EventController@store')->name('save-event');
        Route::get('dashboard/edit-event/{id}', 'App\Http\Controllers\EventController@edit')->name('edit-event');
        Route::post('dashboard/update-event/{id}', 'App\Http\Controllers\EventController@update')->name('update-event');
        Route::get('dashboard/delete-event/{id}', 'App\Http\Controllers\EventController@destroy')->name('delete-event');

         //posts
        Route::get('dashboard/all-posts', 'App\Http\Controllers\PostController@index')->name('all-posts');
        Route::get('dashboard/add-post', 'App\Http\Controllers\PostController@create')->name('add-post');
        Route::get('dashboard/edit-post/{id}', 'App\Http\Controllers\PostController@edit')->name('edit-post');
        Route::get('dashboard/show-post/{id}', 'App\Http\Controllers\postsController@show')->name('show-post');
        Route::post('dashboard/save-post', 'App\Http\Controllers\PostController@store')->name('save-post');
        Route::post('dashboard/update-post/{id}', 'App\Http\Controllers\PostController@update')->name('update-post');
        Route::get('dashboard/publish-post/{id}', 'App\Http\Controllers\PostController@publish')->name('publish-post');
        Route::get('dashboard/draft-post/{id}', 'App\Http\Controllers\PostController@draft')->name('draft-post');
        Route::get('dashboard/delete-post/{id}', 'App\Http\Controllers\PostController@destroy')->name('delete-post');
    });
 });
