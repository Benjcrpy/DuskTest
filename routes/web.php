<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropZoneController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('drop zone', 'DropZone.index');
Route::post('/drop-zone', [DropZoneController::class, 'upload']);

Route::view('auto suggest', 'AutoSuggest.index');
Route::get('/search', [ProductsController::class, 'search']);

Route::view('lazy-load', 'LazyLoad.index');
Route::get('/lazy-load-data', [DropZoneController::class, 'index']);

