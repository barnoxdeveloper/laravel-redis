<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('eloquent-user', [UserController::class, 'index'])->name('user');

Route::controller(UserController::class)->group(function () {
    // eloquent orm
    Route::get('eloquent-user', 'eloquentUser')->name('eloquent-user');
    // eloquent orm with relationship
    Route::get('eloquent-user-relation', 'eloquentUserRelation')->name('eloquent-user-relation');
    
    // query-builder
    Route::get('query-builder-user', 'queryBulderUser')->name('query-builder-user');
    // eloquent orm with relationship
    Route::get('query-builder-user-relation', 'queryBulderUserRelation')->name('query-builder-user-relation');
    
    Route::get('redis-user', 'redisUser')->name('redis-user');
});