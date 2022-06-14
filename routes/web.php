<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
	return view('auth.login');
});

Route::middleware('auth')->group(function () {
	Route::get('home', [HomeController::class, 'index'])->name('home.index');
});
