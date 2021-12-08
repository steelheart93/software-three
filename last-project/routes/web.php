<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('coronapp.about');
})->name('about');

Route::get('/cifras', function () {
    return view('coronapp.cifras');
})->name('cifras');

Route::get('/datos', function () {
    return view('coronapp.datos');
})->name('datos');

Route::get('/charts', function () {
    return view('coronapp.charts', [
        "estados" => json_encode(ApiController::getEstados()),
        "departamentos" => json_encode(ApiController::getDepartamentos()),
    ]);
})->name('charts');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
