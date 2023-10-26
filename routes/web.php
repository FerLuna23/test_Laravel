<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!|
*/

Route::get('/', function () {
    return view('inicio');
});

//
// Route::get('/create-entries', function () {
//     return view('form');
// });

// Route::post('/entries', function (Request $request) {
//     $response = Http::post('http://tu-servicio-rest/api/entries', [
//         'title' => $request->input('title'),
//         'author' => $request->input('author'),
//         'publication_date' => $request->input('publication_date'),
//         'content' => $request->input('content'),
//     ]);

//     return redirect('/entries');
// });

/* Route::get('/', 'EntryController@index');
Route::get('/entries', 'EntryController@index')->name('entries.index');
Route::get('/entries/create', 'EntryController@create')->name('entries.create');
Route::post('/entries', 'EntryController@store')->name('entries.store');


Route::get('/entries', function () {
    $response = Http::get('http://tu-servicio-rest/api/entries');
    $entries = $response->json();
    return view('entries.index', compact('entries'));
});*/ 
