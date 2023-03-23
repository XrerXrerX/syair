<?php

use App\Http\Controllers\PasaranController;
use App\Http\Controllers\SyairController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


use App\Http\Resources\UserCollection;

use Illuminate\Support\Facades\Route;
use App\Models\Pasaran;
use App\Models\Syair;
use Illuminate\Support\Str;


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

    return view('home', [
        'pasarans' => Pasaran::all(),
        'syairs' => Syair::paginate(7)

    ]);
});


Route::get('/angkasyair', [PasaranController::class, 'index']);


Route::get('/syair/{syair:datepost}', [SyairController::class, 'show']);

Route::get('/klajsdiojqioqwio0uaksldj/id9d29', [LoginController::class, 'index']);

Route::get('/klajsdiojqioqwio0uaksldj/id9d29', [LoginController::class, 'index']);


Route::get('/klajsdiojqioqwio0uaksldj/id9d29/register', [RegisterController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard.index');
});
