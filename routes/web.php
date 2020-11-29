<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ScoreController;

Route::get('/', function() {
	return redirect('students');
});

Route::resource('/students',StudentsController::class);
Route::post('/set-student-filter','\App\Http\Controllers\StudentsController@setFilter');
Route::get('/reset-student-filter','\App\Http\Controllers\StudentsController@resetFilter');

Route::resource('/scores',ScoreController::class);