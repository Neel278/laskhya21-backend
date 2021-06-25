<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\EventController;
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

// auth routes
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

// route to show login errors
Route::get('/login', [UserController::class, 'loginGet'])->name('login');

// contact route for sending feedback data
Route::post('/contact', [ContactController::class, 'index'])->middleware('cors');
// Route::get('/contact', function () {
//     return response()->json(['message' => 'hello'], 200);
// })->middleware('cors');

// contact route for getting feedback data
Route::get('/feedbacks', [ContactController::class, 'show']);
Route::get('/verify-email/{user_email}&{mail_hash}', [UserController::class, 'verifyMail']);

// Department route for getting all department list
Route::get('/departments', [DepartmentsController::class, 'show']);
// Department route for getting all events list
Route::get('/departments/{dep_name}', [EventController::class, 'getEventsOfAnDepartment']);
// Events route for getting one event
Route::get('/events/{event_name}', [EventController::class, 'searchOneEvent']);

// This is the group of authentication required routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [UserController::class, 'user']);
    Route::post('/logout', [UserController::class, 'logout']);

    // This is the group of authentication for admin required routes
    Route::middleware('adminauth')->group(function () {
        Route::get('/admin', [UserController::class, 'admin']);
        Route::get('/admin/departments', [DepartmentsController::class, 'index']);
    });
});
