<?php

use App\Http\Controllers\auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

 

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



//Auth routes
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
    Route::get('/verify/{token}/{email}', [AuthController::class, 'accountVerify']);    
    Route::post('/password-reset', [AuthController::class, 'PasswordReset']);    
    Route::post('/update-password', [AuthController::class, 'UpdatePassword']);    
    // Route::get('/password-reset/{token}/{email}', [AuthController::class, 'PasswordReset']);    
});