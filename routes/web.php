<?php

use App\Http\Controllers\ArticleController;

Route::get('/', [ArticleController::class, 'index']);
Route::get('/clanek/{article}', [ArticleController::class, 'show']);
