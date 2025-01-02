<?php

use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\ClasssController;
use App\Http\Controllers\InviteLinkController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::post('/create', [RegisterController::class, 'create']);
Route::post('/login', [RegisterController::class, 'login']);
Route::post('/cod', [InviteLinkController::class, 'create']);

Route::middleware(['auth:sanctum'])->group(function () {


    Route::get('/users', [RegisterController::class, 'index']);
    Route::get('/admin/product/index', [ProductController::class, 'index']);
    Route::post('/admin/product/create', [ProductController::class, 'create']);
    Route::get('/cod', [InviteLinkController::class, 'index']);
    Route::delete('/admin/class/delete/{id}', [ClasssController::class, 'delete']);
    Route::get('/admin/class/index', [ClasssController::class, 'index']);
    Route::post('/admin/class/create', [ClasssController::class, 'create']);
    Route::get('/show', [RegisterController::class, 'show']);
});
