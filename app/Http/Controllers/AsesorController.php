<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Asesor;
use App\Local;
use App\Rol;

class AsesorController extends Controller
{
        public function __Construct(){
            $this->middleware('auth')->except('index');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesores = DB::table('tb_asesor as a')
                    ->join('tb_local','a.id_local','=','tb_local.id_local')
                    ->join('tb_roles','a.id_rol','=','tb_roles.id_rol')
                    ->select('id_asesor','nombre_asesor','apellido_asesor',
                             'correo_asesor','genero','telefono_asesor',
                             'fecha_naci_asesor','tipo_docu_asesor',
                             'a.id_local','tb_local.descripcion_local',
                             'a.id_rol','tb_roles.nom_rol_usuario')
                    ->paginate(10);
           return view('asesor.index', compact('asesores'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locales = Local::all();
        $roles = Rol::all();
        return view('asesor.create', compact('locales','roles'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        request()->validate([
            'nombre_asesor' => 'required|min:5',
            'apellido_asesor' => 'required',
            'correo_asesor' => 'required',
            'genero' => 'required',
            'id_local' => 'required',
            'id_rol' => 'required',
            'telefono_asesor' => 'required',
            'fecha_naci_asesor' => 'required',
            'tipo_docu_asesor' => 'required',
        ]);

        $asesor = new Asesor;
        $asesor->nombre_asesor = $request->nombre_asesor;
        $asesor->apellido_asesor = $request->apellido_asesor;
        $asesor->correo_asesor = $request->correo_asesor;
        $asesor->genero = $request->genero;
        $asesor->id_local = $request->id_local;
        $asesor->id_rol = $request->id_rol;
        $asesor->telefono_asesor = $request->telefono_asesor;
        $asesor->fecha_naci_asesor = $request->fecha_naci_asesor;
        $asesor->tipo_docu_asesor = $request->tipo_docu_asesor;
        $asesor->save();
        return redirect()->route('asesor.index')->with('status','guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asesor = Asesor::findOrFail($id);
        $locales = Local::all();
        $roles = Rol::all();
        return view('asesor.edit', compact('asesor','locales','roles'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asesor = Asesor::findOrFail($id);
        $asesor->fill($request->all());
        $asesor->save();
        return redirect()->route('asesor.index')->with('status','actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asesor = Asesor::findOrFail($id);
        $asesor->delete();
        return redirect()->route('asesor.index')->with('status','eliminado');
    }
}