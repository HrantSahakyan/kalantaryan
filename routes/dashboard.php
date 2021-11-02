<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dashboard routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. There is also prefix "dashboard".
| Namespace is "App\Http\Controllers\Dashboard".
|
*/

Route::get('/', function () {
    return view('dashboard.dashboard');
})->name('dashboard.index');
