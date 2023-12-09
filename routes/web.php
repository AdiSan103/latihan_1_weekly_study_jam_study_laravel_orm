<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/dashboard', function () {
//     return view('welcome');
// });

// dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard_view'])->name('dashboard');

// detail
Route::get('/detail/{id}', [AdminController::class, 'detail_view']);

// create -> view
Route::get('/create', [AdminController::class, 'create_view']);

// create/action
Route::post('/create/action', [AdminController::class, 'create_action']);

// update -> view
Route::get('/update/{id}', [AdminController::class, 'update_view']);

// update/action
Route::post('/update/action', [AdminController::class, 'update_action']);

// delete
Route::post('/delete/action', [AdminController::class, 'delete_action']);

// Route::get('/delete/{id}', function($id) {
//  return $id;
// });