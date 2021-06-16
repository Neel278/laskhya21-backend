<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Admin login routes
Route::get('/admin/login', function () {
    return view('admin/login');
})->name('admin.login');

Route::post('/admin/login', [AdminController::class, 'index']);

// Authentication middleware + admin check middleware applied
Route::middleware('auth:sanctum', 'adminauth')->group(function () {
    // Route for showing dashboard to admin
    Route::get('/admin/dashboard', [AdminController::class, 'show'])->name('admin.dashboard');

    // Routes to add event
    Route::get('/admin/addEvent', [EventController::class, 'index']);
    Route::post('/admin/addEvent', [EventController::class, 'add'])->name('event.add');

    // Routes to update event
    Route::get('/admin/updateEvent', [EventController::class, 'show']);
    // Routes to search event in update page
    Route::post('/admin/searchEvent', [EventController::class, 'search']);
    // Route to delete an event
    Route::get('/admin/delete/{event_id}', [EventController::class, 'delete']);

    // Route to show messages
    Route::get('/admin/messages', [AdminController::class, 'messages']);

    // Route for admin to logout from account
    Route::get('/admin/logout', [AdminController::class, 'logout']);

    // Route to fetch specific message but it has a vildcard so put it at last
    Route::get('/admin/messages/{message_id}', [AdminController::class, 'showOneMessage']);
});
