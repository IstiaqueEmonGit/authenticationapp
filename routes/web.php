<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login_info_controller;
use App\Http\Controllers\Members_details;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/logininfo/{id}', [Login_info_controller::class, 'logininfo'])->middleware(['auth'])->name('logininfo');
Route::get('/membersdetails', [Members_details::class, 'membersdetails'])->middleware(['auth'])->name('membersdetails');
