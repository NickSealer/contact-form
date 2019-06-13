<?php

Route::group(['middleware' => ['web']], function() {
  Route::get('contact', 'Taskuniverse\ContactForm\ContactController@index')->name('contact');
  Route::post('/', 'Taskuniverse\ContactForm\ContactController@sendEmail')->name('send');  
});
