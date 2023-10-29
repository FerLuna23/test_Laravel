<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
    $response = Http::withoutVerifying()->get('https://aplicaciones.setab.gob.mx/api_laravel_tres/public/api/getEntries');
    $entries = $response->json();
    return view('inicio', compact('entries'));
}); 

Route::get('/create-entries', function () {
    return view('form');
})->name('create_entries');

Route::get('/single-entry/{id}', function ($id) {
    $response = Http::withoutVerifying()->get("https://aplicaciones.setab.gob.mx/api_laravel_tres/public/api/getEntry/$id");
    $entry = $response->json();

    return view('single', compact('entry'));
});

Route::post('/entries', function (Request $request) {
    $response = Http::withoutVerifying()->post('https://aplicaciones.setab.gob.mx/api_laravel_tres/public/api/register', [
        'titulo' => $request->input('title'),
        'autor' => $request->input('author'),
        'fecha_publicacion' => $request->input('publication_date'),
        'contenido' => $request->input('content')
    ]);

    $response = json_decode($response);

    return Redirect::route('create_entries')->with('datos', $response);
})->name('register');

