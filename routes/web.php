<?php
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('licenses', LicenseController::class);
    });
    Route::resource('users', UserController::class)->only('show', 'edit');
    Route::resource('licenses', LicenseController::class)->only('show');
});
