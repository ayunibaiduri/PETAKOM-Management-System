<?php

use App\Http\Controllers\BulletinController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/activities', function () {
        return view('activities');
    })->name('activities');
    Route::get('/proposal', function () {
        return view('proposal');
    })->name('proposal');
    Route::get('/election', function () {
        return view('election');
    })->name('election');
    Route::get('/bulletin', function(){
        return view('bulletin',[BulletinController::class,"index"]
    );
    })->name('bulletin');
    // Route::get('/',[BulletinController::class,'Show']);
    // Route::get('/bulletins','BulletinController@index');
    // Route::resource('bulletin', BulletinController::class);


});
