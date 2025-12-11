<?php

use App\Http\Controllers\EducationalProgramController;

Route::get('/', [EducationalProgramController::class, 'list']);
Route::get('/programs', [EducationalProgramController::class, 'list']);

Route::get('/programs/table', [EducationalProgramController::class, 'index']);