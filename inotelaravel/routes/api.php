<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/note/list", [\App\Http\Controllers\NoteController::class, "index"])->name("note.index");
Route::post("/create", [\App\Http\Controllers\NoteController::class, "create"])->name("note.create");
Route::delete("/delete/{note}", [\App\Http\Controllers\NoteController::class, "delete"])->name("note.delete");
Route::put("/edit/{note}", [\App\Http\Controllers\NoteController::class, "edit"])->name("note.edit");
