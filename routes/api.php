<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Auth\AuthController;
//use App\Http\Controllers\api\QuestionController;
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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', '\App\Http\Controllers\AuthController@login');
});
Route::group(['middleware' => 'jwt.verify'], function () {
    Route::get('getdata', '\App\Http\Controllers\api\QuestionController@getData');
    Route::post('insertdata', '\App\Http\Controllers\api\QuestionController@insertData');
    Route::put('updatedata/{id}', '\App\Http\Controllers\api\QuestionController@updateData');
    Route::delete('deletedata/{id}', '\App\Http\Controllers\api\QuestionController@deleteData');

});



