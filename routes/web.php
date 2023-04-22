<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', function () {return view('dashboard.pages.index');})->name('pages.index');
Route::resource('/projects', ProjectController::class);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/tables', [AdminController::class,'index'])->name('tables.apiv01');
Route::get('admin/tables/update', [AdminController::class,'update'])->name('tables.apiv02');
Route::get('/error', function () {return view('basic.pages.404_page');});
require __DIR__.'/auth.php';
