<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/create', [StudentController::class, 'create'])->name('create');
Route::post('/store', [StudentController::class, 'store'])->name('store');
Route::get('/list', [StudentController::class, 'index'])->name('list');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [StudentController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [StudentController::class, 'destroy'])->name('destroy');
Route::get('/detailed/{id}', [StudentController::class, 'detailed'])->name('detailed');


