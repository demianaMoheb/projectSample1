<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\Customers\CustomersControllers;
use App\Http\Controllers\backend\PostsController;
use App\Http\Controllers\AgeController;



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
//http://127.0.0.1:8000

Route::get('/', function () {
    return view('welcome');
});
//Route::resource('post','App\Http\Controllers\posts');
Route:: get('post/{id}/{name}','App\Http\Controllers\posts@post');
//3mlt route 3adi w fl a5er 2oltlo ygib mn el class eli esmo posts 3nd el function eli esmaha post(bta3et awel view 3rdnah)
Route::get('/hello','App\Http\Controllers\posts@hello');
Route::get('/home','App\Http\Controllers\posts@posts');
Route::get('/contact','App\Http\Controllers\posts@contact');

//Route::namespace('Customers')->group(function(){

//Route::get('/add_customer',[CustomersControllers::class,'add_customer']);
//});

//Route::prefix('/admin')->group(function(){

//Route::get('/add_customer',[CustomersControllers::class,'add_customer']);

//});
//Route::group(['prefix'=>'admin','namespace'=>'Customers'],function(){
  //Route::get('/add_customer',[CustomersControllers::class,'add_customer']);
//});

Route::namespace('backend')->group(function(){

Route::get('/add_posts',[PostsController::class,'create']);// PostController here called the target class
Route::post('/add_posts/store',[PostsController::class,'store'])->name('posts.store');
Route::get('/posts', [PostsController::class,'index'])->name('posts.index');
Route::get('/posts/edit/{id}',[PostsController::class,'edit'])->name('posts.edit');
Route::post('/add_posts/update/{id}',[PostsController::class,'update'])->name('posts.update');
Route::get('/add_posts/delete/{id}',[PostsController::class,'destroy'])->name('posts.destroy');
});
//middleware

//Route::get('/you-age',[AgeController::class,'index'])->middleware('CheckAge');
//Route::group(['middleware'=>'auth','CheckAge'],function(){
  //Route::get('/you-age',[AgeController::class,'index']);
//});
//---------------------------------------------------------------
//validate excel(or sound or image) laravel format
//---------------------------------------------------------------

//php artisan cache:clear
//if the route is undefined try the next command
//php artisan route:cache
//php artisan config:cache
//php artisan view:clear
