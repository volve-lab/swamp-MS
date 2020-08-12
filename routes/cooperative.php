<?php

Route::group(['namespace' => 'Cooperative'], function() {
    Route::get('/', 'HomeController@index')->name('cooperative.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('cooperative.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('cooperative.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('cooperative.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('cooperative.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('cooperative.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('cooperative.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('cooperative.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('cooperative.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('cooperative.verification.verify');

});