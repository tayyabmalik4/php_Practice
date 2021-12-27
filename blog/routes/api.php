<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\dataAPI;
use App\Http\Controllers\getAPI;
use App\Http\controllers\postAPI;
use App\Http\controllers\updateAPI;
use App\Http\controllers\deleteAPI;
use App\Http\controllers\searchAPI;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('data',[dataAPI::class,'dataAPI']);
// Route::get('get',[getAPI::class,'getAPI']);
// Route::post('post',[postAPI::class,'post']);
// Route::put('update',[updateAPI::class,'update']);
// Route::delete('delete/{id}',[deleteAPI::class,'delete']);
Route::get('search/{name}',[searchAPI::class,'search']);
