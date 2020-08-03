<?php

use Illuminate\Support\Facades\Route;

Route::prefix('travel-agent')->name('travel.agent.')->group(function () {
    Route::get('/', 'TravelAgent\Auth\LoginController@showLoginForm');
    Route::get('/login', 'TravelAgent\Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'TravelAgent\Auth\LoginController@login');
    Route::post('/logout', 'TravelAgent\Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('/register', 'TravelAgent\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'TravelAgent\Auth\RegisterController@register');
    Route::get('/password/reset', 'TravelAgent\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email', 'TravelAgent\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/password/reset/{token}', 'TravelAgent\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset', 'TravelAgent\Auth\ResetPasswordController@reset');
});
