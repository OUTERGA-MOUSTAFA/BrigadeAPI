<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SocialAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
// google
Route::get('/google', [SocialAuthController::class, 'redirectToGoogle']);
Route::get('/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
// facebook 
Route::get('/facebook', [SocialAuthController::class, 'redirectTofacebook']);
Route::get('/facebook/callback', [SocialAuthController::class, 'handlefacebookCallback']);
Route::middleware(['auth:sanctum'])->group(function () {
    // GET /api/plats
    // POST /api/plats
    // GET /api/plats/{id}
    // PUT /api/plats/{id}
    // DELETE /api/plats/{id}

    // GET /api/categories
    // POST /api/categories
    // GET /api/categories/{id}
    // PUT /api/categories/{id}
    // DELETE /api/categories/{id}
    // POST /api/categories/{id}/plats
    // Auth Actions
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', function (Request $request) {
        return response()->json([
            'user' => $request->user()
            ]);
    });
});
