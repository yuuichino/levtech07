<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

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
});

Route::get('/posts', [Postcontroller::class,'index']);

Route::get('/',function(){
	return view('posts.index');
});*/

Route::get('/', [Postcontroller::class, 'index']);

Route::get('/posts/create', [Postcontroller::class,'create']);

Route::get('/posts/{post}', [Postcontroller::class,'show']);

Route::post('/posts',[Postcontroller::class,'store']);

Route::get('/posts/{post}/edit', [Postcontroller::class, 'edit']);

Route::put('posts/{post}', [Postcontroller::class, 'update']);