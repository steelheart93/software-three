<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Auth;
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
    return view('coronapp.datos', [
        "departamentos" => ApiController::getGrupos("departamento_nom"),
        "ciudades" => ApiController::getGrupos("ciudad_municipio_nom"),
        "datos" => json_encode(ApiController::getDatosTabla()),
    ]);
})->name('datos');

Route::get('/charts', function () {
    return view('coronapp.charts', [
        "estados" => ApiController::getEstados(),
        "departamentos" => json_encode(ApiController::getDepartamentos()),
    ]);
})->name('charts');

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::resource('cita', CitaController::class);
