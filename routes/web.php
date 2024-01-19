<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\AdminController;

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
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/display', [DisplayController::class, 'index'])->name('index')->middleware('guest');
Route::get('/admin', [AdminController::class, 'index'])->name('index')->middleware('guest');
route::post('/updateDisplay', [AdminController::class, 'updateDisplay'])->name('updateDisplay')->middleware('guest');
route::get('/deleteIklan/{id}', [AdminController::class, 'deleteIklan'])->name('deleteIklan')->middleware('guest');
route::post('/addAgenda', [AdminController::class, 'addAgenda'])->name('addAgenda')->middleware('guest');
route::get('/deleteAgenda/{id}', [AdminController::class, 'deleteAgenda'])->name('deleteAgenda')->middleware('guest');