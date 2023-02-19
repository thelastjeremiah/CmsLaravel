<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\FrontendIndexController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\emailListController;
use Illuminate\Support\Facades\Auth;


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


Route::controller(FrontendIndexController::class)->group(function(){
  Route::get('/','index')->name('frontend.pages.index');
  Route::get('/contact','contact')->name('frontend.pages.contact');
  Route::post('/send-mail','sendEmail')->name('frontend.page.contact');
  Route::get('/thank-you','thankyou')->name('frontend.pages.thankyou');
  Route::get('/about-us','about_us')->name('frontend.pages.thankyou');
  Route::get('/blog-single/{id}','blog_single')->name('frontend.pages.blog-single');
  Route::get('/blogs','blogs')->name('frontend.pages.blogs');
});


Route::controller(HomeController::class)->group(function(){

  Route::get('/home','index')->name('backend.pages.home');
  
});


Route::controller(AdminController::class)->group(function(){

  Route::middleware('auth')->group(function () {
    Route::get('admin/index','index')->name('backend.pages.admin.index');
    Route::post('admin/delete/{id}','destroy')->name('backend.pages.admin.index');
    Route::get('admin/edit/{id}','edit')->name('backend.pages.admin.edit');
    Route::post('admin/edit/{id}','update')->name('backend.pages.admin.edit');
  });

});


Route::controller(emailListController::class)->group(function(){

  Route::middleware('auth')->group(function () {
    Route::get('/email/index','index')->name('backend.pages.email.index');
    Route::post('/email/delete/{id}','destroy')->name('backend.pages.email.index');
  });

});



Route::controller(BlogController::class)->group(function(){

  Route::middleware('auth')->group(function () {
    Route::get('blog/index','index')->name('backend.pages.blog.index');
    Route::get('blog/create','create')->name('backend.pages.blog.create');
    Route::post('blog/store','store')->name('backend.pages.blog.create');
    Route::post('blog/delete/{id}','destroy')->name('backend.pages.blog.index');
    Route::get('blog/edit/{id}','edit')->name('backend.pages.blog.edit');
    Route::post('blog/edit/{id}','update')->name('backend.pages.blog.edit');
  });

});