<?php

use App\Http\Controllers\Api\HospitalController;
use App\Http\Controllers\Api\InsuranceController;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\SpecialityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')->name('auth.')->group(function () {
    Route::middleware('throttle:5,1')->group(function () {
        Route::post('register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
        Route::post('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
    });

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    });
});

Route::middleware('auth:sanctum')->group( function () {
    Route::apiResource('insurances', InsuranceController::class);
    Route::apiResource('hospitals', HospitalController::class);
    Route::apiResource('patients', PatientController::class);
    Route::apiResource('specialities', SpecialityController::class);
});
