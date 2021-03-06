<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\assignmentController;

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

Route::get('/palindroms', [assignmentController::class, 'findPalindroms'])->name("find-palindorms");
Route::get('/time', [assignmentController::class, 'secondsCount'])->name("get-seconds-count");
Route::get('/joke', [assignmentController::class, 'text'])->name("get-text");
Route::get('/beerRecipe', [assignmentController::class, 'getRecipe'])->name("get-recipe");
Route::get('/nominee', [assignmentController::class, 'getNominee'])->name("get-nominee");
Route::get('/teams', [assignmentController::class, 'makeTeams'])->name("get-Teams");
