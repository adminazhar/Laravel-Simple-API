<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

//API VERSION, create another prefix for another version
Route::prefix('v1')->group(function (){
    Route::resource('posts', 'App\Http\Controllers\PostController');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
