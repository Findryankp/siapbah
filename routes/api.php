<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeriksaHasilAuditController;
use App\Http\Controllers\API\SupportNeedController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/support-need')->group(function () {
    Route::get('/getByidSupport/{id}',  [SupportNeedController::class, 'getByidSupport']);
    Route::get('/deleteByidSupport/{id}',  [SupportNeedController::class, 'deleteByidSupport']);
});