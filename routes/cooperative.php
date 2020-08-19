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


    //Cooperative route

    Route::get('/information', 'CooperativeInfoController@index')->name('cooperative.index');
    Route::get('/information/{id}/edit','CooperativeInfoController@edit')->name('cooperative.edit');
    Route::get('/information/{id}/delete','CooperativeInfoController@destroy')->name('cooperative.destroy');
    Route::get('/information/create','CooperativeInfoController@create')->name('cooperative.create');
    Route::post('/information/create','CooperativeInfoController@store')->name('cooperative.store');
    Route::post('/information/update','CooperativeInfoController@update')->name('cooperative.update');

    //Cooperative swamp

    Route::get('/swamp', 'DemandController@swamp')->name('cooperative.swamp');
    Route::get('/request', 'DemandController@index')->name('demand.index');
    Route::get('/swamp/{id}/request','DemandController@demand')->name('swamp.demand');
    Route::get('/swamp/{id}/request/delete','DemandController@destroy')->name('demand.destroy');

    Route::get('/swamp/{id}/payment','PaymentController@create')->name('demand.payment');
    Route::post('/payment/create','PaymentController@store')->name('payment.store');

    Route::get('/payment', 'PaymentController@index')->name('payment.index');


    //  SWAMP PAYMENT

    Route::get('/contract', 'PaymentController@contract')->name('cooperative.contract.index');
    Route::get('/contract/{id}/approve','PaymentController@statusContractApprove')->name('status.contract.approve');
    Route::get('/contract/{id}/deny','PaymentController@statusContractDeny')->name('status.contract.deny');
    
    



    
});