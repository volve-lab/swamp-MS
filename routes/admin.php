<?php


    Route::GET('/home', 'AdminController@index')->name('admin.home');
    // Login and Logout
    Route::GET('/', 'LoginController@showLoginForm')->name('admin.login');
    Route::POST('/', 'LoginController@login');
    Route::POST('/logout', 'LoginController@logout')->name('admin.logout');

    // Password Resets
    Route::POST('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::GET('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::POST('/password/reset', 'ResetPasswordController@reset');
    Route::GET('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::GET('/password/change', 'AdminController@showChangePasswordForm')->name('admin.password.change');
    Route::POST('/password/change', 'AdminController@changePassword');

    // Register Admins
    Route::get('/register', 'RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'RegisterController@register');
    Route::get('/{admin}/edit', 'RegisterController@edit')->name('admin.edit');
    Route::delete('/{admin}', 'RegisterController@destroy')->name('admin.delete');
    Route::patch('/{admin}', 'RegisterController@update')->name('admin.update');

    // Admin Lists
    Route::get('/show', 'AdminController@show')->name('admin.show');
    Route::get('/me', 'AdminController@me')->name('admin.me');

    // Admin Roles
    Route::post('/{admin}/role/{role}', 'AdminRoleController@attach')->name('admin.attach.roles');
    Route::delete('/{admin}/role/{role}', 'AdminRoleController@detach');

    // Roles
    Route::get('/roles', 'RoleController@index')->name('admin.roles');
    Route::get('/role/create', 'RoleController@create')->name('admin.role.create');
    Route::post('/role/store', 'RoleController@store')->name('admin.role.store');
    Route::delete('/role/{role}', 'RoleController@destroy')->name('admin.role.delete');
    Route::get('/role/{role}/edit', 'RoleController@edit')->name('admin.role.edit');
    Route::patch('/role/{role}', 'RoleController@update')->name('admin.role.update');

    // active status
    Route::post('activation/{admin}', 'ActivationController@activate')->name('admin.activation');
    Route::delete('activation/{admin}', 'ActivationController@deactivate');
    Route::resource('permission', 'PermissionController');


    //Swamp route

    Route::GET('/district/swamp', 'SwampController@index')->name('swamp.index');
    Route::GET('/district/swamp/{id}/edit','SwampController@edit')->name('swamp.edit');
    Route::GET('/district/swamp/{id}/delete','SwampController@destroy')->name('swamp.destroy');
    Route::GET('/district/swamp/create','SwampController@create')->name('swamp.create');
    Route::POST('/district/swamp/create','SwampController@store')->name('swamp.store');
    Route::POST('/district/swamp/update','SwampController@update')->name('swamp.update');


    //USER COOPERATIVE

    Route::get('/user/cooperative', 'UserContnroller@cooperative')->name('cooperative.users');
    Route::get('/user/{id}/cooperative/active','UserContnroller@statusCooperativeActive')->name('status.cooperative');
    Route::get('/user/{id}/cooperative/disactive','UserContnroller@statusCooperativeDisactive')->name('status.cooperative.disactive');

      // COOPERATIVE MANAGEMENT

      Route::get('/user/cooperative/management', 'CooperativeManagementContnroller@cooperativeView')->name('cooperative.management');
      Route::get('/user/{id}/cooperative/management/approve','CooperativeManagementContnroller@statusCooperativeApprove')->name('status.cooperative.approve');
      Route::get('/user/{id}/cooperative/management/deny','CooperativeManagementContnroller@statusCooperativeDeny')->name('status.cooperative.deny');
  

      //  SWAMP REQUEST

      Route::get('/swamp/request', 'CooperativeManagementContnroller@requestView')->name('swamp.district.request');
      Route::get('/swamp/{id}/request/management/approve','CooperativeManagementContnroller@statusRequestApprove')->name('status.request.approve');
      Route::get('/swamp/{id}/request/management/deny','CooperativeManagementContnroller@statusRequestDeny')->name('status.request.deny');
  
       //  SWAMP PAYMENT

       Route::get('/swamp/payment', 'CooperativeManagementContnroller@paymentView')->name('swamp.district.payment');
       Route::get('/swamp/{id}/payment/management/approve','CooperativeManagementContnroller@statusPaymentApprove')->name('status.payment.approve');
       Route::get('/swamp/{id}/payment/management/deny','CooperativeManagementContnroller@statusPaymentDeny')->name('status.payment.deny');

       //Contract route

      Route::GET('/district/contract', 'ContractController@index')->name('contract.index');
      Route::GET('/district/contract/{id}/edit','ContractController@edit')->name('contract.edit');
      Route::GET('/district/contract/{id}/delete','ContractController@destroy')->name('contract.destroy');
      Route::GET('/district/contract/create','ContractController@create')->name('contract.create');
      Route::POST('/district/contract/create','ContractController@store')->name('contract.store');
      Route::POST('/district/contract/update','ContractController@update')->name('contract.update');



    //Swamp REMA

    Route::GET('/rema/swamp', 'SwampController@rema')->name('swamp.rema');
    Route::GET('/rema/swamp/used', 'SwampController@remaUsed')->name('swamp.rema.used');

   

    Route::fallback(function () {
        return abort(404);
    });
