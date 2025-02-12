<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\IncomeController;
use App\Http\Controllers\admin\ExpenseController;
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Group routes that require authentication
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Admin routes with role check
    Route::middleware('role:admin')->group(function () {
        Route::apiResource('incomes', IncomeController::class);
        Route::apiResource('expenses', ExpenseController::class);
    });
});
