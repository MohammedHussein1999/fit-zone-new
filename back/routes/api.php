<?php

use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\InviteLinkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', [RegisterController::class, 'index']);
Route::post('/create', [RegisterController::class, 'create']);
Route::post('/login', [RegisterController::class, 'login']);
Route::post('/cod', [InviteLinkController::class, 'create']);
Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/show', [RegisterController::class, 'show']);
});
