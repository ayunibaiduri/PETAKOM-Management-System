<?php

use App\Http\Controllers\BulletinController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('bulletin',[BulletinController::class,"index"]);
//add bulletin
Route::post('bulletin',[BulletinController::class,"store"]);
//  //edit blog
//  Route::put('blog-posts/{id}',[BlogPostController::class,"update"]);
//  //delete blog
//  Route::delete('blog-posts/{id}',[BlogPostController::class,"destroy"]);
 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
