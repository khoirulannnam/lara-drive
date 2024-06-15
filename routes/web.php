<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GdriveController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::name('web.')->group(function () {
    Route::get('/store', [GdriveController::class, 'store'])->name('store');
    Route::post('/upload', [GdriveController::class, 'upload'])->name('upload');
    Route::get('/stream', [GdriveController::class, 'stream'])->name('stream');
    Route::get('/stream-file', [GdriveController::class, 'streamByPath'])->name('stream-by-path');
});