<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeoplesController;

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

Route::post('add_people',[PeoplesController::class, 'add']);
Route::put('edit_people',[PeoplesController::class, 'edit']);
Route::delete('delete_record',[PeoplesController::class, 'delete']);
Route::get('getalldata',[PeoplesController::class,'getall']);
Route::get('getdata/{id}',[PeoplesController::class,'getone']);