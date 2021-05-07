<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController, CommentController, AuthController
};

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
Route::get('/login', [AuthController::class, 'index']);
Route::post('/login/action', [AuthController::class, 'login']);
Route::get('/', function(Request $request){
    if(Auth::check()){
        return view("index");
    }

    return redirect("/login");
});

Route::middleware(["auth"])->group(function () {
    Route::get('/getPost', [PostController::class, 'getPost']);
    Route::post('/post/comment', [CommentController::class, 'postComment']);
});