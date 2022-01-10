<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WarningController;
use App\Http\Controllers\WarningCategoryController;
use App\Http\Controllers\AttendanceCategoryController;

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
    return view('welcome', ['title' => 'Premi Operator Arka']);
});

Route::get('home', function () {
    return view('home');
});

Route::get('projects', [ProjectController::class, 'index']);
Route::get('projects/add', [ProjectController::class, 'add']);
Route::post('projects', [ProjectController::class, 'addProcess']);
Route::get('projects/edit/{id}', [ProjectController::class, 'edit']);
Route::patch('projects/{id}', [ProjectController::class, 'editProcess']);
Route::delete('projects/{id}', [ProjectController::class, 'delete']);

Route::get('att_categories', [AttendanceCategoryController::class, 'index']);
Route::get('att_categories/add', [AttendanceCategoryController::class, 'add']);
Route::post('att_categories', [AttendanceCategoryController::class, 'addProcess']);
Route::get('att_categories/edit/{id}', [AttendanceCategoryController::class, 'edit']);
Route::patch('att_categories/{id}', [AttendanceCategoryController::class, 'editProcess']);
Route::delete('att_categories/{id}', [AttendanceCategoryController::class, 'delete']);

Route::get('warning_categories', [WarningCategoryController::class, 'index']);
Route::get('warning_categories/add', [WarningCategoryController::class, 'add']);
Route::post('warning_categories', [WarningCategoryController::class, 'addProcess']);
Route::get('warning_categories/edit/{id}', [WarningCategoryController::class, 'edit']);
Route::patch('warning_categories/{id}', [WarningCategoryController::class, 'editProcess']);
Route::delete('warning_categories/{id}', [WarningCategoryController::class, 'delete']);

Route::get('warnings/data', [WarningController::class, 'index_data'])->name('warnings.index.data');
Route::get('warnings/trash', [WarningController::class, 'trash']);
Route::get('warnings/restore/{id?}', [WarningController::class, 'restore']);
Route::get('warnings/delete/{id?}', [WarningController::class, 'delete']);
Route::resource('warnings', 'WarningController');
