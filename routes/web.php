<?php

Route::get('/', 'SiteController@index');
Route::get('/about-us', 'SiteController@about');
Route::get('/contact-us', 'SiteController@contact');
Route::get('/team', 'SiteController@team');
Route::get('/info', 'SiteController@info');

/*
 * Web User Authentication Routes
 */
 
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/my-account', 'UserController@profile');
    Route::get('/add-property', 'UserController@addProperty');
    Route::get('/profile', 'UserController@profile');
});

Route::group(['prefix' => 'wp-admin', 'middleware' => 'wp-admin'], function () {

    /*
     * Administrator Routes
     */
    Route::get('/', 'Admin\DashboardController@index');
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('adminDashboard');
    Route::get('/profile', 'Admin\DashboardController@profile');
    Route::get('/settings', 'Admin\DashboardController@settings');

    /*
     * Categories Routes
     */
    Route::resource('category', 'Admin\CategoryController');

    /*
     * Listings Routes
     */
    Route::resource('listing', 'Admin\ListingController');
});


/*
 * Administrator Authentication Routes
 */

Route::get('/wp-admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('adminLogin');
Route::post('/wp-admin/login', 'Admin\Auth\LoginController@login')->name('adminLogin');
Route::post('/wp-admin/logout', 'Admin\Auth\LoginController@logout')->name('adminLogout');
Route::post('/wp-admin/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('adminPasswordReset');
Route::post('/wp-admin/forgot-password', 'Admin\Auth\ResetPasswordController@reset')->name('adminPasswordReset');
Route::get('/wp-admin/forgot-password', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('adminPasswordReset');
Route::get('/wp-admin/forgot-password/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('adminPasswordResetToken');
Route::post('/wp-admin/register', 'Admin\Auth\RegisterController@register')->name('adminRegister');
Route::get('/wp-admin/register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('adminRegister');