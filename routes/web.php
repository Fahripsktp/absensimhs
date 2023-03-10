<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home', [
        'title' => 'HOME',
        'active' => 'HOME'
    ]);
});
Route::get('/berhasil', function () {
    return view('absensi.barhasil');
});

Route::get('/admin', function () {
    return view('Dashboard.dashboardlte');
});

// absensi mhs
route::get('/datamhs', [AbsensiController::class, 'index' ]);
route::get('/absensimhs', [AbsensiController::class, 'create' ]);
route::post('/absensimhs', [AbsensiController::class, 'store' ]);
Route::resource('absen', AbsensiController::class);
// login guru atau admin
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register guru atau admin
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
