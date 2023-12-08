<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $pageName = 'Home';
    $greetings = 'Hello world';

    return view('home', [
        'pageName' => $pageName,
        'greetings' => $greetings
    ]);
})->name('home');

Route::get('/prima-pagina', function() {
    return view('prima-pagina', [
        'pageName' => 'Prima pagina'
    ]);
})->name('prima-pagina');

Route::get('/seconda-pagina', function() {
    return view('seconda-pagina', [
        'pageName' => 'Seconda pagina'
    ]);
})->name('seconda-pagina');
