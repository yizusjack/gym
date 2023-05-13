<?php

use App\Models\Pais;
use App\Models\Gimnasta;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ScoreController;
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
        /*$gimnastas = Gimnasta::with('paises')->paginate(10); //Using 'with' we are implementing eager loading
        return view('gimnastas.indexGimnasta', compact('gimnastas'));*/
        return redirect('gimnasta');
    })->name('dashboard');
});

Route::resource('gimnasta', GimnastaController::class)->middleware('auth')->parameters([
    'gimnasta' => 'gimnasta'
]);

Route::resource('competencia', CompetenciaController::class)->middleware('auth')->parameters([
    'competencia' => 'competencia'
]);

Route::get('gimnasta/galeria/{gimnasta}',
    [GimnastaController::class, 'galeria'])
    ->name('gimnasta.galeria');

Route::resource('picture', PictureController::class)->middleware('auth');

// EVENTS

Route::resource('event', EventController::class)->middleware('auth');

Route::get('event/add-event/{competencia}',
    [EventController::class, 'newEvent'])
    ->name('event.newEvent');

//SCORES
Route::get('score/create/{event}',
    [ScoreController::class, 'create'])
    ->name('score.create');

Route::post('score/store',
    [ScoreController::class, 'store'])
    ->name('score.store');

Route::get('score/{score}/edit',
    [ScoreController::class, 'edit'])
    ->name('score.edit');

Route::patch('score/{score}',
    [ScoreController::class, 'update'])
    ->name('score.update');

Route::delete('score/{score}',
    [ScoreController::class, 'destroy'])
    ->name('score.destroy');


View::composer(['*'], function($view){
    $gimn = Gimnasta::all();
    $view->with('gimn', $gimn);
});
