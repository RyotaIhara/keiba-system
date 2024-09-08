<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tests', [TestController::class, 'index']); // 全データ取得
Route::get('/tests/{id}', [TestController::class, 'show']); // 特定のIDのデータ取得
