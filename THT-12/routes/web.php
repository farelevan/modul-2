<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WilayahController;

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

Route::get('/provinces', [WilayahController::class, 'index']);
Route::get('/regencies/{provinceId}', [WilayahController::class, 'showRegencies']);
Route::get('/districts/{regencyId}/{provinceId}', [WilayahController::class, 'showDistricts']);
Route::get('/villages/{districtId}/{regencyId}/{provinceId}', [WilayahController::class, 'showVillages']);
