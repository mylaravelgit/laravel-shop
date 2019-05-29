<?php

Route::get('/', 'PagesController@root')->name('root');


Auth::routes(['verify' => true]);
//, 'verified'
Route::group(['middleware' => ['auth']], function() {
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
});

