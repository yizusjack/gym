<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GimnastaController;
use App\Models\Gimnasta;

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
        $gimnastas = Gimnasta::all(); //puede ser get()
        return view('gimnastas.indexGimnasta', compact('gimnastas'));
    })->name('dashboard');
});

Route::resource('gimnasta', GimnastaController::class)->parameters([
    'gimnasta' => 'gimnasta'
]);

View::composer(['*'], function($view){
    $gimnastas = Gimnasta::all();
    $view->with('gimnastas', $gimnastas);
});
