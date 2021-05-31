<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceMotorController ;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/mekanik', [MekanikController::class, 'index']);

Route::get('/sparepart', [SparepartController::class, 'index']);

Route::get('/pelanggan', [PelangganController::class, 'index']);

Route::get('/servismotor', [ServiceMotorController ::class, 'index']);

Route::get('/gallery', [GalleryController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);