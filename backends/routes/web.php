<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EtudeController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\RealiseController;

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::middleware('auth')->group(function () {

    // Projet
    Route::get('/listprojet', [ProjetController::class, 'index']);
    Route::get('/listprojet', [ProjetController::class, 'show']);
    Route::get('/formprojet', [ProjetController::class, 'create']);
    Route::post('/projet', [ProjetController::class, 'store'])->name('projet');
    Route::put('/projetupdate/{id}', [ProjetController::class, 'update'])->name('projet.update');
    Route::delete('/projetdestroy/{id}', [ProjetController::class, 'destroy'])->name('projet.destroy');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Realisation
    Route::get('/listrealise', [RealiseController::class, 'index']);
    Route::get('/formrealise', [RealiseController::class, 'create']);
    Route::post('/realisation', [RealiseController::class, 'store'])->name('realisation');
    Route::put('/realiseupdate/{id}', [RealiseController::class, 'update'])->name('realise.update');
    Route::delete('/realisedestroy/{id}', [RealiseController::class, 'destroy'])->name('realise.destroy');
 

    // Etudes
     Route::get('/listetude', [EtudeController::class, 'index']);
     Route::get('/listetude', [EtudeController::class, 'view']);
    Route::get('/formetude', [EtudeController::class, 'create']);
    Route::post('/realisation', [EtudeController::class, 'store'])->name('etude');
    Route::put('/etudeupdate/{id}', [EtudeController::class, 'update'])->name('etude.update');
    Route::delete('/etudedestroy/{id}', [EtudeController::class, 'destroy'])->name('etude.destroy');


    // Contact
    //  Route::get('/listetude', [EtudeController::class, 'index']);
     Route::get('/contact', [ContactController::class, 'show']);
});

require __DIR__.'/auth.php';
