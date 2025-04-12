<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OcorrenciaController;
use Illuminate\Support\Facades\Route;

Route::get('/cliente', [ClienteController::class, 'index']);
Route::post('/cliente', [ClienteController::class, 'store']);

Route::get('/ocorrencia',[OcorrenciaController::class, 'index']);
Route::post('/ocorrencia',[OcorrenciaController::class, 'store']);

Route::get('/admin',[LoginController::class, 'index']);

/*Route::get('/cliente', function(){
    return response()->json([
        'success' => true
    ]);
});*/

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/
