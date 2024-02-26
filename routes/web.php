<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        "heading" => "Latest listings",
        "listings" => Listing::all()
    ]);
});

Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        "listing" => Listing::find($id)
    ]);
})->where('id', '[0-9]+');

Route::get('/hello', function () {
    return response('<h1>Hello World</h1>')
        ->header('Content-Type', 'text/plain');
});

Route::get('/posts/{id}', function ($id) {
    return response("You are looking at post {$id}");
})->where('id', '[0-9]+');


Route::get('/search', function (Request $request) {
    return response("Search results for {$request->name} and {$request->city} will be displayed here");
});