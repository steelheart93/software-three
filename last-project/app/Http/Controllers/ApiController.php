<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
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
    private static $API_URI = 'https://www.datos.gov.co/resource/gt2j-8ykr.json';

    public static function getEstados()
    {
        $QUERY_STRING = '?$select=estado, count(estado) AS count&$group=estado&$having=count > 0';
        return Http::get(static::$API_URI . $QUERY_STRING)->json();
    }

    public static function getDepartamentos()
    {
        $QUERY_STRING = '?$select=departamento_nom, count(departamento_nom) AS count&$group=departamento_nom&$order=count DESC&$limit=10';
        return Http::get(static::$API_URI . $QUERY_STRING)->json();
    }
}
