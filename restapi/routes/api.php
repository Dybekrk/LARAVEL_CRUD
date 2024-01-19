<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::put('/Dybas/54898/edit-people/{id}', [PeopleController::class, 'edit']);
Route::get('/Dybas/54898/people', [PeopleController::class, 'index']);
Route::get('/Dybas/54898/people/{id}', [PeopleController::class, 'show']);
Route::post('/Dybas/54898/people', [PeopleController::class, 'create']);
Route::delete('/Dybas/54898/people/{id}', [PeopleController::class, 'delete']);
