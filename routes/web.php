<?php

use App\Models\Pais;
use App\Models\Gimnasta;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\GimnastaController;
use App\Http\Controllers\CompetenciaController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        //return view('dashboard');
        $paises = Pais::all();
        $gimnastas = Gimnasta::all(); //puede ser get()
        return view('gimnastas.indexGimnasta', compact('gimnastas', 'paises'));
    })->name('dashboard');
});

Route::resource('gimnasta', GimnastaController::class)->middleware('auth')->parameters([
    'gimnasta' => 'gimnasta'
]);

Route::resource('competencia', CompetenciaController::class)->middleware('auth')->parameters([
    'competencia' => 'competencia'
]);

Route::resource('picture', PictureController::class);

View::composer(['*'], function($view){
    $gimnastas = Gimnasta::all();
    $view->with('gimnastas', $gimnastas);
});
