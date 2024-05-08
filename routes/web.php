<?php

use \App\Http\Controllers\FileController;
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

Route::get('/', fn() => Inertia::render('index',
    ['files' => File::all()]
));
Route::resource('add', FileController::class);
