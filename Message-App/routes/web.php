<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [\App\Http\Controllers\IndexController::class, 'show'])->middleware(['auth', 'verified']);
Route::get('/clear-messages', [\App\Http\Controllers\MessageController::class, 'destroy']);
Route::get('/clear-conversations', [\App\Http\Controllers\ConversationController::class, 'destroy']);

Route::post('/send', [\App\Http\Controllers\MessageController::class, 'store']);
Route::post('/update-user', [\App\Http\Controllers\UserController::class, 'update']);
Route::post('/update-chat', [\App\Http\Controllers\ConversationController::class, 'update']);


Route::post('/new-chat', [\App\Http\Controllers\ConversationController::class, 'store']);
