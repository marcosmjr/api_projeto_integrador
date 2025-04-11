<?php

use App\Http\Controllers\ClienteController;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/cliente', [ClienteController::class, 'index']);

/*Route::get('/cliente', function(){
    return response()->json([
        'success' => true
    ]);
});*/

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/
