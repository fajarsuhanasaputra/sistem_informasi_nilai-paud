<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;

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

Route::group(['prefix' => '/'], function() {
    Route::get('/', function () {
        return view('landing');
    });
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/contact', function () {
        return view('contact');
    });
});

Route::group(['prefix' => 'dashboard'], function() {
    Route::get('/', [Dashboard::class, 'index'])->name('dashboard');
    Route::get('/users', [Dashboard::class, 'users'])->name('users');
    Route::post('/users', [Dashboard::class, 'add_account'])->name('users.add');
    Route::delete('/users/{biodata_id}', [Dashboard::class, 'remove_account'])->name('users.remove');
});