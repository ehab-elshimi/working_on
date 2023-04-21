<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
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
    return view('dashboard.pages.index');
})->name('dashboard.pages.index');

Route::get('/error', function () {
    return view('basic.pages.404_page');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
require('auth.php');
Route::get('/admin/tables', [AdminController::class,'index'])->name('tables.apiv01');
Route::get('/admin/tables/update', [AdminController::class,'update'])->name('tables.apiv02');


Route::group(['middleware'=>'auth','prefix'=>'/admin','as'=>'dashboard.'],function () {
    Route::resource('/projects', ProjectController::class);
});
