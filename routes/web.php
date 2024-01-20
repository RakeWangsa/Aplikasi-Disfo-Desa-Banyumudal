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
    return redirect('/display');
});


Route::get('/display', [DisplayController::class, 'index'])->name('index');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/checkLogin', [LoginController::class, 'checkLogin'])->name('checkLogin');


Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    route::post('/updateDisplay', [AdminController::class, 'updateDisplay'])->name('updateDisplay');
    route::get('/deleteIklan/{id}', [AdminController::class, 'deleteIklan'])->name('deleteIklan');
    route::post('/addAgenda', [AdminController::class, 'addAgenda'])->name('addAgenda');
    route::get('/deleteAgenda/{id}', [AdminController::class, 'deleteAgenda'])->name('deleteAgenda');
});
