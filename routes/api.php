<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/v1/hospital')->name('api.v1.hospital.')->group(function () {
    Route::get('/index', [HospitalController::class, 'apiIndex'])->name('index');
    Route::get('/show/{id}', [HospitalController::class, 'apiShow'])->name('show');
});
