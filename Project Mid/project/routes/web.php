<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanController;

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
    return view('menu');
});

Route::get('/createKaryawan', [PerusahaanController::class, 'getValidate']);
Route::post('/createKaryawan', [PerusahaanController::class, 'postValidate']);


Route::get('/get-books', [PerusahaanController::class, 'getEmployee']);

Route::get('/edits/{id}', [PerusahaanController::class, 'showdata']);
Route::post('edits', [PerusahaanController::class, 'updatedata']);
Route::get('list', [PerusahaanController::class, 'list']);
Route::get('/delete/{id}', [PerusahaanController::class, 'delete']);
Route::get('/search', [PerusahaanController::class, 'searching']);