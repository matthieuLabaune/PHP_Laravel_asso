<?php

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

/*Route::resource('users', UserController::class);*/

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/show/{id}/', [UserController::class, 'show'])->name('users.show');
Route::get('/users/edit/{id}/', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/update/{id}/', [UserController::class, 'update'])->name('users.update');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::delete('/users/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
