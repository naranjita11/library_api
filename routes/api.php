<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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

    Route::group(["prefix" => "{author}"], function () {
        Route::get("", [AuthorController::class, "show"]);

    });
});

Route::group(["prefix" => "books"], function () {
    Route::get("", [BookController::class, "index"]);

    Route::group(["prefix" => "{book}"], function () {
        Route::get("", [BookController::class, "show"]);

    });
});