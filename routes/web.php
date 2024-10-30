<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\post;

Route:: get('/', [HomeController::class, 'home']);
 
Route::resource('posts',PostController::class)->names('posts');

/*CREACION MANUAL DE LAS 7 RUTAS PARA UN CRUD
Route:: get ('/posts',[PostController::class, 'index'])->name('posts.index');
Route:: get('/posts/create',[PostController::class, 'create'])->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route:: get('/posts/{post}',[PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');
Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update');
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');*/

/*CREACION DE LAS 5 RUTAS PARA UN CRUD CON API
route::apiResource('posts',PostController::class);*/



   