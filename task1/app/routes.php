<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'root', 'uses' => 'TaskOneController@showRoot'));

Route::get('/home', 'TaskOneController@showHome');

Route::get('/atricles', array('as' => 'atricles', 'uses' => 'TaskOneController@showAtricles'));

Route::get('/atricles/{post}', array('as' => 'post', 'uses' => 'TaskOneController@showPost'));

Route::get('/notFound', array('as' => 'notFound', 'uses' => 'TaskOneController@showNotFound'));

Route::get('/about', array('as' => 'about', 'uses' => 'TaskOneController@showAbout'));

Route::get('/contact-us', array('as' => 'contact-us', 'uses' => 'TaskOneController@showContactUs'));

Route::get('/thank-you', array('as' => 'thank-you ', 'uses' => 'TaskOneController@showThankYou'));

Route::post('/submit-form', array('as' => 'submit-form ', 'uses' => 'TaskOneController@submitForm'));