<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
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

Route::post('login', [LoginController::class,"login"]);

Route::middleware(['auth:api', 'role'])->group(function() {
        // List users
        Route::middleware(['scope:admin,moderator'])
        ->get('/users', function (Request $request) {
            return User::get();
        });
});

