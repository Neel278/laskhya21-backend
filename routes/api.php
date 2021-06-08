<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// contact route for getting feedback data
Route::post('/contact', [ContactController::class, 'index']);

// contact route for getting feedback data
Route::get('/feedbacks', [ContactController::class, 'show']);

// authentication login route
Route::post("login", [UserController::class, 'index']);
