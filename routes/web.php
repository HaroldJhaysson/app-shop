<?php

Route::get('/','Testcontroller@wel');




Route::get('/prueba',function(){
	return 'U can pass SW1';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
