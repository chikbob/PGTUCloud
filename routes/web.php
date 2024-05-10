<?php

use \App\Http\Controllers\AddFileController;
use App\Http\Controllers\ListFileController;
use App\Http\Controllers\UserController;
use App\Http\Resources\UserResource;
use App\Models\File;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'user']);
Route::resource('file', AddFileController::class);
Route::get('list', ListFileController::class);

Route::get('register', fn() => Inertia::render('register',));
Route::post('register/success', [UserController::class, 'register']);

Route::group(['middleware' => 'web'], function () {
    Route::get('login', fn() => Inertia::render('login',));
    Route::post('login/success', [UserController::class, 'login']);
});
