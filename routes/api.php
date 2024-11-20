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


Route::apiResource('insurances', InsuranceController::class);
Route::apiResource('hospitals', HospitalController::class);
Route::apiResource('patients', PatientController::class);
Route::apiResource('specialities', SpecialityController::class);
