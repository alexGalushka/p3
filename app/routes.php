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

View::share('paragraphs', 'GenTextController@GetParagraphs');
View::share('outputArray', 'GenUsersController@GetOutputArray');

Route::get('/', 'IndexController@ShowLoremIpsum');

Route::get('/lorem-ipsum', 'GenTextController@ShowLoremIpsum');

Route::post('/lorem-ipsum', 'GenTextController@ProcessInput');

Route::get('/user-generator', 'GenUsersController@ShowUserGenerator');

Route::post('/user-generator', 'GenUsersController@ProcessInput');


