<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AuthController;

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
    })->name('landing');
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/contact', function () {
        return view('contact');
    });
    Route::get('/signin', function () {
        if (Auth::check()) {
            return redirect('dashboard');
        }
        return view('login');
    })->name('login');
});

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::get('/', [Dashboard::class, 'index'])->name('dashboard');
    Route::get('/users', [Dashboard::class, 'users'])->name('users');
    Route::post('/users', [Dashboard::class, 'add_account'])->name('users.add')->middleware('checkRole:admin');
    Route::get('/users/{biodata_id}', [Dashboard::class, 'usersEdit'])->name('usersEdit')->middleware('checkRole:admin');
    Route::put('/users/{user_id}/{biodata_id}', [Dashboard::class, 'userEdit_action'])->name('userEdit_action')->middleware('checkRole:admin');
    Route::delete('/users/{biodata_id}', [Dashboard::class, 'remove_account'])->name('users.remove')->middleware('checkRole:admin');

    Route::get('/aspek', [Dashboard::class, 'aspek'])->name('aspek')->middleware('checkRole:admin,guru');
    Route::post('/aspek', [Dashboard::class, 'aspek_add'])->name('aspek.add')->middleware('checkRole:admin,guru');
    Route::delete('/aspek/{aspek_id}', [Dashboard::class, 'remove_aspek'])->name('aspek.remove')->middleware('checkRole:admin,guru');

    Route::get('/aspek/{aspek_id}', [Dashboard::class, 'aspekEdit_view'])->name('aspekEdit')->middleware('checkRole:admin,guru');
    Route::put('/aspek/{aspek_id}', [Dashboard::class, 'aspekEdit_action'])->name('aspekEdit_action')->middleware('checkRole:admin,guru');

    Route::get('/poin-penilaian', [Dashboard::class, 'poin_penilaian'])->name('poin_penilaian')->middleware('checkRole:admin,guru');
    Route::get('/poin-penilaian/{poin_id}', [Dashboard::class, 'edit_view_poin_penilaian'])->name('edit_view_poin_penilaian')->middleware('checkRole:admin,guru');
    Route::post('/poin-penilaian', [Dashboard::class, 'add_poin_penilaian'])->name('add_poin_penilaian')->middleware('checkRole:admin,guru');
    Route::put('/poin-penilaian/{poin_id}', [Dashboard::class, 'edit_action_poin_penilaian'])->name('edit_action_poin_penilaian')->middleware('checkRole:admin,guru');
    Route::delete('/poin-penilaian/{poin_id}', [Dashboard::class, 'remove_poin_penilaian'])->name('remove_poin_penilaian')->middleware('checkRole:admin,guru');

    Route::get('/nilai', [Dashboard::class, 'nilai'])->name('nilai')->middleware('checkRole:guru');
    Route::get('/nilai/{user_id}', [Dashboard::class, 'nilai_detail'])->name('nilai_detail')->middleware('checkRole:guru');
    Route::post('/nilai/{user_id}', [Dashboard::class, 'nilai_add'])->name('nilai.add')->middleware('checkRole:guru');
    Route::delete('/nilai/{user_id}/{nilai_id}', [Dashboard::class, 'remove_nilai'])->name('nilai.remove')->middleware('checkRole:guru');

    Route::get('/profile/{user_id}', [Dashboard::class, 'profile'])->name('profile');
    Route::put('/profile/{user_id}/{biodata_id}', [Dashboard::class, 'profile_update'])->name('profile.update');
});

Route::group(['prefix' => 'auth'], function() {
    Route::post('login', [AuthController::class, 'login'])->name('login.action');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout.action')->middleware('checkRole:admin,guru,siswa');
});