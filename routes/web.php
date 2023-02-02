<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffreController;

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
    return view('accueil');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/template', function(){
    return view('template');
})->name('template');

Route::get('/', [OffreController::class, 'offrecountrech'])->name('accueil');

Route::post('/recherche', [OffreController::class, 'recherche'])->name('recherchejob');

/* Route::get('/candidature', [CandidatureController::class, '']); */

Route::get('/offre/{id}', [OffreController::class, 'rechoffre'])->name('detailoffre');
