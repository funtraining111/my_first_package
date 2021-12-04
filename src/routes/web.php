<?php

use Illuminate\Http\Request;


Route::get('contact', function () {
    return 'ee';
});

// Route::get('contact2', function() {
//     return view('contact::contact');
// })->name('contact2');

// Route::post('contact2', function(Request $request) {
//     return $request->all();
// })->name('contact2');

Route::group(['namespace'=> 'Bitfumeskkk\Contact\Http\Controllers'], function () {
    
    Route::get('contact2', 'ContactController@index')->name('contact2');
    Route::post('contact2', 'ContactController@store')->name('contact2');
});