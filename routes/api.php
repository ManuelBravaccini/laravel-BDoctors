<?php

use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\SpecializationController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/doctors', [DoctorController::class, 'index'])->name('api.doctors.index');

Route::get('/doctors/{doctor}',[ DoctorController::class, 'show'])->name('api.doctors.show');


//Rotta per API di specializzazioni

Route::get('/specializations', [SpecializationController::class, 'index'])->name('api.specializations.index');