<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentsCotroller;
use App\Http\Controllers\PostsCotroller;
use App\Http\Controllers\PostStatusesCotroller;
use App\Http\Controllers\ReactionsCotroller;
use App\Http\Controllers\ReactionTypesCotroller;
use App\Http\Controllers\RepliesCotroller;
use App\Http\Controllers\UsersCotroller;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');

// Route::get('products', 'App\Http\Controllers\products@all' );

// Route::get('products', [ProductController::class, 'index'] );
// Route::get('products/create', [ProductController::class, 'create'] );
// Route::post('products', [ProductController::class, 'store'] );
// Route::get('products/{product}', [ProductController::class, 'show'] );
// Route::get('products/{product}/edit', [ProductController::class, 'edit'] );
// Route::put('products', [ProductController::class, 'update'] );
// Route::delete('products', [ProductController::class, 'destroy'] );

Route::resource('products', ProductController::class);
Route::resource('products', CommentsCotroller::class);
Route::resource('products', PostsCotroller::class);
Route::resource('products', PostStatusesCotroller::class);
Route::resource('products', ReactionsCotroller::class);
Route::resource('products', ReactionTypesCotroller::class);
Route::resource('products', RepliesCotroller::class);


