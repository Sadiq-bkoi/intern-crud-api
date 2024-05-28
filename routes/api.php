<?php

use App\Http\Controllers\v2\MuserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/getusers', [MuserController::class, 'get_user_data']);
Route::post('/createuser', [MuserController::class, 'create_user_data']);
Route::delete('/delete/{id}', [MuserController::class, 'delete_user_data']);

Route::put('/edit/{id}', [MuserController::class, 'edit_user_data']);