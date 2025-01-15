<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::controller(StudentController::class)->group(function(){

    Route::get('/', 'showStudent')->name('home');
    Route::get('/user/{id}', 'signleShow')->name('view.name');
    Route::get('/delete/{id}', 'deleteUser')->name('delete.user');
    Route::post('/add', 'addUser')->name('addUser');
    // Update Data
    Route::get('/update/{id}', 'updateUser')->name('update.user');

});


    // Add new Student
Route::view('/add-user', 'addUser');
