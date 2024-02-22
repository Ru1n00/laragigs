<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/posts', function() {
    return response()->json([
        'posts' => [
            [
                'id' => 1,
                'title' => 'My first post',
                'content' => 'This is my first post'
            ],
            [
                'id' => 2,
                'title' => 'My second post',
                'content' => 'This is my second post'
            ],
            [
                'id' => 3,
                'title' => 'My third post',
                'content' => 'This is my third post'
            ]
        ]
    ]);
});