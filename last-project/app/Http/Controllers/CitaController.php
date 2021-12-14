<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware(['auth', 'role.user'])->except('create', 'show');
        // $this->middleware(['auth', 'role.employee'])->except('create', 'index', 'show');
        $this->middleware(['auth', 'role.admin'])->except('create', 'edit', 'index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $citas = DB::select('SELECT * FROM citas');
        $citas = Cita::orderBy('id', 'ASC')->paginate(7);
        return view('cita.index', ['citas' => $citas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cita.create', ['cita' => new Cita()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cita::create($request->all());
        return back()->with("status", "Cita generada con éxito");
    }

    /**
     * Display the specified resource.
     *
     * @param  $id, identificador de la cita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita = Cita::find($id);
        return view('cita.show', ['cita' => $cita]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id, identificador de la cita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita = Cita::find($id);
        return view('cita.edit', ["cita" => $cita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id, identificador de la cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cita = Cita::find($id);
        $cita->update($request->all());
        return back()->with('status', 'Cita actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id, identificador de la cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita = Cita::find($id);
        $cita->delete();
        return back()->with('status', 'Cita cancelada con éxito');
    }

}
