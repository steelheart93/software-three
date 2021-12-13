<?php

namespace App\Http\Controllers;


use App\Models\Cita;
use Illuminate\Http\Request;
use vendor\laravel\framework\src\Illuminate\Support\helpers;
use DB;
use vendor\laravel\framework\src\Illuminate\Support\Str;
use vendor\laravel\framework\src\Illuminate\Support\Arr;



class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cita=DB::select('SELECT * FROM citas ');
        //echo json_encode($cita,true);
        return view('coronapp.listquotes',['cita' => $cita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coronapp.quotes',['citas' => new Cita()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $cedula= $data["cedula"];
        $nombre = $data["nombre"];
        $eps = $data["eps"];
        $fecha_cita =$data["fecha_cita"];
        $choises = $data["choices"];

        $data=array("cc"=>$cedula,"nombre"=>$nombre,"eps"=>$eps,"fecha_cita"=>$fecha_cita,"tipo_cita"=>$choises);
        DB::table('citas')->insert($data);

        return back()->with('status', 'Cita generada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita= DB::select('SELECT * FROM citas where id=' . $id);
        $cita = reset($cita);
        echo  json_encode($cita,true);
        return view('coronapp.show', ['cita' => $cita]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita= DB::select('SELECT * FROM citas where id=' . $id);
        $cita = reset($cita);
        return view('coronapp.editquotes',['cita'=>$cita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        echo "holii";
        $citas = citas::find($id);
        $citas->cc = $request->get('cc');
        $citas->nombre = $request->get('nombre');
        $citas->eps = $request->get('eps');
        $citas->fecha_cita = $request->get('fecha_cita');
        $citas->tipo_cita = $request->get('tipo_cita');


        $citas->update();

        return back()->with('status', 'Publicación actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita =Cita::where('id',$id)->first();
        if($cita != null)
        {
            $cita->delete();
            return back()->with('status', 'cita cancelada con éxito');
        }


    }

}
