<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'blogDetail'])->name('blog.detail');

Route::resources([
    'users' => UserController::class,
    'buildings' => BuildingController::class,
    'rooms' => RoomController::class,
]);

Route::get('/buildings/{building:slug}', [BuildingController::class, 'show'])->name('buildings.show');
Route::get('/rooms/{room:slug}', [RoomController::class, 'show'])->name('rooms.show');
