<?php

use App\Http\Controllers\DashboardController;
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
        'syairs' => Syair::latest()->paginate(7),


    ]);
});


Route::get('/angkasyair', [PasaranController::class, 'index']);


Route::get('/syair/{syair:slug}', [SyairController::class, 'show']);


Route::get('/trex1diath/login', [LoginController::class, 'index']);
Route::post('/trex1diath/login', [LoginController::class, 'authenticate']);

Route::get('/trex1diath/register', [RegisterController::class, 'index']);
Route::post('/trex1diath/register', [RegisterController::class, 'store']);



Route::get('/trex1diath/dashboard', function () {
    return view('dashboard.index');
});
Route::resource('/trex1diath/dashboard/posts', DashboardController::class);
Route::get('/dashboard/posts/checkSlug', [DashboardController::class, 'checkSlug']);
