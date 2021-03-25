<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\QuoteController;

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

Route::group(["prefix" => "authors"], function () {
    Route::get("", [AuthorController::class, "index"]);
    Route::get("/search", [AuthorController::class, "searchAuthorName"]);
    Route::get("search/{name}" , [AuthorController::class, "searchAuthorName"]);

    Route::group(["prefix" => "{author}"], function () {
        Route::get("", [AuthorController::class, "show"]);

    });
});

Route::group(["prefix" => "books"], function () {
    Route::get("", [BookController::class, "index"]);
    Route::get("/search", [BookController::class, "searchBookTitle"]);
    Route::get("search/{title}" , [BookController::class, "searchBookTitle"]);
    
    Route::group(["prefix" => "{book}"], function () {
        Route::get("", [BookController::class, "show"]);
        
    });
});

Route::group(["prefix" => "quotes"], function () {
    Route::get("", [QuoteController::class, "randomQuote"]);
});

