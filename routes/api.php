<?php

use App\Http\Controllers\Getitem;
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
Route::get('/login',[Getitem::class,'login']);

Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::get('logout',[Getitem::class,'logout']);
    Route::get('item',[Getitem::class,'getitem']);
});

