<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ServiceProviderController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'display'])->name('welcome');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceProviderController::class, 'index'])->name('serviceprovider');
Route::get('/vendor', [VendorController::class, 'index'])->name('vendor');
Route::get('/contact', [ContactController::class, 'view'])->name('contact');


