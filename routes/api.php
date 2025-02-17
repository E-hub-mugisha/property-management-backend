<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\IncomeController;
use App\Http\Controllers\admin\ExpenseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontend\BlogsController;
use App\Http\Controllers\frontend\PropertyController;
use App\Http\Controllers\frontend\BookingController;

Route::apiResource('properties', PropertyController::class);

Route::post('/bookings', [BookingController::class, 'store']);
Route::get('/bookings', [BookingController::class, 'index']);
Route::get('/bookings/{id}', [BookingController::class, 'show']);

Route::get('/blogs', [BlogsController::class, 'index']);
Route::get('/blogs/{id}', [BlogsController::class, 'show']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return response()->json($request->user());
});
