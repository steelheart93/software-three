<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
"fecha_reporte_web": "6/3/2020 0:00:00",
"id_de_caso": "1",
"fecha_de_notificaci_n": "2/3/2020 0:00:00",
"departamento": "11",
"departamento_nom": "BOGOTA",
"ciudad_municipio": "11001",
"ciudad_municipio_nom": "BOGOTA",
"edad": "19",
"unidad_medida": "1",
"sexo": "F",
"fuente_tipo_contagio": "Importado",
"ubicacion": "Casa",
"estado": "Leve",
"pais_viajo_1_cod": "380",
"pais_viajo_1_nom": "ITALIA",
"recuperado": "Recuperado",
"fecha_inicio_sintomas": "27/2/2020 0:00:00",
"fecha_diagnostico": "6/3/2020 0:00:00",
"fecha_recuperado": "13/3/2020 0:00:00",
"tipo_recuperacion": "PCR",
"per_etn_": "6"
 */
Route::get("/estados", function () {
    $API_URI = 'https://www.datos.gov.co/resource/gt2j-8ykr.json';
    $QUERY_STRING = '?$select=estado, count(estado) AS count&$group=estado&$having=count > 0';
    return Http::get($API_URI . $QUERY_STRING)->json();
})->name('estados');

Route::get("/departamentos", function () {
    $API_URI = 'https://www.datos.gov.co/resource/gt2j-8ykr.json';
    $QUERY_STRING = '?$select=departamento_nom, count(departamento_nom) AS count&$group=departamento_nom&$order=count DESC&$limit=10';
    return Http::get($API_URI . $QUERY_STRING)->json();
})->name('departamentos');
