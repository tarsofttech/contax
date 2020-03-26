<?php

Route::group([
    'namespace' => 'Tarsoft\Contax\Http\Controllers', 
    'middleware' => ['web']
], function(){
    Route::get('/', 'ContactFormController@index')->name('form');
    Route::post('contact', 'ContactFormController@store')->name('store');
});