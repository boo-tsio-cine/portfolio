<?php

use App\Http\Controllers\api\ContactController;
use App\Http\Controllers\API\ProjetController as APIProjetController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/projets', [ProjetController::class, 'apiList']);
Route::get('/projets', [APIProjetController::class, 'apiList']);

Route::post('contact', [ContactController::class, 'store']);
Route::put('/test/{id}', [TestController::class, 'update']);
Route::put('/projets/{id}', [ProjetController::class, 'update']);
