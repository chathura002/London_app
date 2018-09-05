<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ContentsController@home')->name('home')->middleware('auth');
Route::get('/clients', 'ClientController@index')->name('clients')->middleware('auth');
Route::get('/clients/new', 'ClientController@newClient')->name('new_client')->middleware('auth');
Route::post('/clients/new', 'ClientController@newClient')->name('create_client')->middleware('auth');
Route::get('/clients/{client_id}', 'ClientController@show')->name('show_client')->middleware('auth');
Route::post('/clients/{client_id}', 'ClientController@modify')->name('update_client')->middleware('auth');

Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room')->middleware('auth');
Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room')->middleware('auth');

Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom')->name('book_room')->middleware('auth');

Route::get('export', 'ClientController@export')->middleware('auth');

Route::get('/upload', 'ContentsController@upload')->middleware('auth');
Route::post('/upload', 'ContentsController@upload')->middleware('auth');

Route::auth();
Route::get('/logout', 'Auth\AuthController@logout');
Route::get('/home', 'HomeController@index');
Route::get('/generate/password', function(){return bcrypt('123456789');});

// Route::get('/about', function () {
//     $response_arr = [];
//     $response_arr['author'] = 'BP';
//     $response_arr['version'] = '1.0.05';
//     return $response_arr;
// });

// Route::get('/home', function () {
//     $data = [];
//     $data['version'] = '1.0.15';
//     return view('welcome', $data);
// });


// Route::get('/di', 'ClientController@di');

// Route::get('/enc', function () {
//     return Crypt::encrypt('asdasdasd');
// });

// Route::get('/dec', function () {
//     return Crypt::decrypt('eyJpdiI6ImhST1lDTFNYWm1heUtkY1lnVFQ5Z2c9PSIsInZhbHVlIjoiUkliSldENDF6Wk1YenpMak1PaUJDNDJBVFEwUytsUmt4Y1wva2t4czZpV0E9IiwibWFjIjoiYTZmNTk0NzhjN2VlMzZiMjA0YzExNWE3NDIyMGI1NDBmODg4MzQyMTgyNDYxNjFlMWIwZTNiNDdmMzZkNDU0YyJ9');
// });

