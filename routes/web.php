<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::resources([
    'authors' => AuthorController::class,
    'books' => BookController::class,
]);