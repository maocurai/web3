<?php

use Illuminate\Support\Facades\Route;

Route::get('/home/{showAllNews?}', function($showAllNews='0'){
    $par = new App\Http\Controllers\AutorisationController();
    return $par->allNews($showAllNews);
})->name('home');

Route::get('/autorisation', function () {
    return view('autorisation');
})->name('autorisation');

Route::get('/comment', 'App\Http\Controllers\CommentController@allComments')->name('comment');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::post('/autorisation/submit', 'App\Http\Controllers\AutorisationController@submit')->name('autorisation-form');

Route::post('/registration/submit', 'App\Http\Controllers\RegistrationController@submit')->name('registration-form');

Route::post('/comment/submit', 'App\Http\Controllers\CommentController@submit')->name('comment-form');