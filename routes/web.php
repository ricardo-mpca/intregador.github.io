<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;



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

use App\Http\Controllers\EventController;

use App\Http\Controllers\ApiController;

use App\Http\Controllers\SolosController;

use App\Http\Controllers\QuestionController;

use App\Http\Controllers\PokemonController;


Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('events/update/{id}', [EventController::class, 'update'])->middleware('auth');


Route::get('/contact', [EventController::class, 'contact']);


Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');

Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');

//Routes API



Route::post('/classification', [ApiController::class, 'show']);

Route::get('/integra/api', [ApiController::class, 'api'])->middleware('auth');

Route::get('/posts', [ApiController::class, 'index'])->middleware('auth');

Route::get('/pokemon', [ApiController::class, 'pokemon'])->middleware('auth');

Route::get('/github', [ApiController::class, 'github'])->middleware('auth');


//Routes SmartSolo Expert

// Route::get('/solos/v1/healthget', [SolosController::class, 'health'])->middleware('auth');

Route::get('/solos/v1/classificationpost', [SolosController::class, 'classification'])->middleware('auth');

Route::get('/solos/v1/verificationpost', [SolosController::class, 'verification'])->middleware('auth');


Route::get('/solos/v1/solo', [SolosController::class, 'index'])->middleware('auth');

Route::get('/solos/v1/create', [SolosController::class, 'create'])->middleware('auth');

Route::get('/solos/v1/{id}', [SolosController::class, 'show'])->middleware('auth');

Route::post('/solos', [SolosController::class, 'store'])->middleware('auth');

Route::delete('/solos/v1/{id}', [EventController::class, 'destroy'])->middleware('auth');

Route::get('health', [SolosController::class, 'health'])->middleware('auth');


//Route QuizAPI

Route::get('/quiz/v1/questions', [QuestionController::class, 'index'])->middleware('auth');
Route::get('fetch', [QuestionController::class, 'fetch'])->middleware('auth');
Route::get('/quiz/v1/{id}', [QuestionController::class, 'show'])->middleware('auth');

//Route Pokemon

Route::get('/pokelist', [PokemonController::class, 'pokelist'])->middleware('auth');



