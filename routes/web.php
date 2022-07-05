<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;

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

Auth::routes();

Route::get('/home', [SubjectController::class, 'index'])->name('home.index');
Route::get('/subject/create', [SubjectController::class, 'create']);
Route::post('/subject/create', [SubjectController::class, 'store']);
Route::get('home/{id}/edit', [SubjectController::class, 'edit']);
Route::post('/home/{id}', [SubjectController::class, 'update']);
Route::get('home/{id}/delete', [SubjectController::class, 'delete']);

