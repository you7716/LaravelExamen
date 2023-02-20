<?php

use Illuminate\Support\Facades\Route;
use App\Models\Candidat;
use App\Models\Formation;
use App\Models\Referentiel;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ReferentielController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('candidats', CandidatController::class);
Route::post('candidats',[CandidatController::class,'store'])->name('candidats.store');
Route::post('Candidats',[CandidatController::class,'store_forms'])->name('formation.add');
Route::post('Candidats',[CandidatController::class,'graphe'])->name('graphe');