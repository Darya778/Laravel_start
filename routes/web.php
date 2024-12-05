<?php

use App\Http\Controllers\FormController;

Route::get('/', [FormController::class, 'showForm']);
Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'submitForm']);
Route::get('/data', [FormController::class, 'listData']);


