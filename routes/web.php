<?php
Route::get ( '/', function () {
	return view ( 'welcome' );
} );
Route::get ( '/student', function () {
	return view ( 'student' );
} );
Route::get ( '/hitjob', 'UserController@sendReminderEmail' );
Route::get ( '/hitevent', 'UserController@sendEvent' );
Route::get ( '/event_list', function () {
	return view ( 'show_event' );
} );

Route::post ( '/vueitems', 'MainController@storeItem' );
Route::get ( '/vueitems', 'MainController@readItems' );
Route::post ( '/vueitems/{id}', 'MainController@deleteItem' );
Route::post ( '/edititems/{id}', 'MainController@editItem' );

/**********For Student Component ****************** */
Route::post ( '/add', 'StudentController@add' );
Route::get ( '/list', 'StudentController@list' );
Route::post ( '/delete/{id}', 'StudentController@delete' );
Route::post ( '/edit/{id}', 'StudentController@edit' );