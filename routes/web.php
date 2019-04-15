<?php


Route::get('/', 'FormDataController@index')->name('form.index');
Route::post('form', 'FormDataController@save')->name('form.save');