<?php

use Illuminate\Support\Facades\Route;
Route::get('admin/signup', function () {return view('basic.pages.signup');})->name('dashboard.auth.signup');
Route::get('admin/login', function () {return view('basic.pages.login');})->name('dashboard.auth.login');