<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasaranController;
use App\Http\Controllers\SyairController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Middleware;


use App\Http\Resources\UserCollection;

use Illuminate\Support\Facades\Route;
use App\Models\Pasaran;
use App\Models\Title;
use Illuminate\Support\Collection;

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

    $dateposts = Syair::pluck('slug')->toArray();
    $syairs = [];

    // Lakukan perulangan pada setiap nilai datepost
    foreach ($dateposts as $datepost) {
        $postDate = substr($datepost, 0, 10);



        // $postDate = date('d-m-Y', $postDat);
        $currentDate = strtotime(date('d-m-Y'));
        $tomorrowDate = strtotime('+1 day', $currentDate);
        $tomorrowDateFormatted = date('Y-m-d', $tomorrowDate);
        if ($postDate <= $tomorrowDateFormatted) {
            // Tampilkan data jika tanggal posting <= tanggal saat ini
            $syair = Syair::Where('slug', $datepost)->first();
            array_push($syairs, $syair);
        } else {
            // Tunggu hingga tanggal posting sebelum menampilkan data
            continue;
        }
    }

    $perPage = 8; // Change this to the number of items you want to display per page
    $currentPage = request()->get('page') ?: 1; // Get the current page from the request, or default to the first page
    $syai = collect($syairs)->sortByDesc('datepost')->forPage($currentPage, $perPage);




    return view('home', [
        'pasarans' => Pasaran::all(),
        // 'syairs' => Syair::orderBy('datepost', 'desc')->paginate(7),
        'title' => Title::first(),
        'syai' => $syai



    ]);
});


Route::get('/angkasyair', [PasaranController::class, 'index']);


Route::get('/syair/{syair:slug}', [SyairController::class, 'show']);


Route::get('/trex1diath/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/trex1diath/login', [LoginController::class, 'authenticate']);

Route::get('/trex1diath/register', [RegisterController::class, 'index']);
Route::post('/trex1diath/register', [RegisterController::class, 'store']);


Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/trex1diath/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');
Route::resource('/trex1diath/dashboard/posts', DashboardController::class)->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardController::class, 'checkSlug']);

Route::resource('/trex1diath/dashboard/admin', AdminCategoryController::class)->except('show')->middleware('admin');
