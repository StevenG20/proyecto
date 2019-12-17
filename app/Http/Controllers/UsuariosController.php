<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Usuarios;
use App\Rol;

class UsuariosController extends Controller
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
        $usuarioss = DB::table('tb_usuarios as us')
                    ->join('tb_roles','us.id_rol','=','tb_roles.id_rol')
                    ->select('id_usuario','nomb_usuario','apellido_usuario',
                             'tipo_docu_usuario','genero_usuario',
                             'us.id_rol','tb_roles.nom_rol_usuario',
                             'telefono_usuario','fecha_crea_usuario','fecha_naci_usuario')
                    ->paginate(10);
           return view('usuarios.index', compact('usuarioss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Rol::orderBy('nom_rol_usuario')->get();
        return view('usuarios.create',compact('roles'));
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
            'nomb_usuario' => 'required|min:5',
            'apellido_usuario' => 'required',
            'tipo_docu_usuario' => 'required',
            'genero_usuario' => 'required',
            'id_rol' => 'required',
            'telefono_usuario' => 'required',
            'fecha_crea_usuario' => 'required',
            'fecha_naci_usuario' => 'required',
        ]);

        $usuarios = new Usuarios;
        $usuarios->nomb_usuario = $request->nomb_usuario;
        $usuarios->apellido_usuario = $request->apellido_usuario;
        $usuarios->tipo_docu_usuario = $request->tipo_docu_usuario;
        $usuarios->genero_usuario = $request->genero_usuario;
        $usuarios->id_rol = $request->id_rol;
        $usuarios->telefono_usuario = $request->telefono_usuario;
        $usuarios->fecha_crea_usuario = $request->fecha_crea_usuario;
        $usuarios->fecha_naci_usuario = $request->fecha_naci_usuario;
        $usuarios->save();
        return redirect()->route('usuarios.index')->with('status','guardado');
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
        $usuarios = Usuarios::findOrFail($id);
        $roles = Rol::all();
        return view('usuarios.edit', compact('usuarios','roles'));
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
        $usuarios = Usuarios::findOrFail($id);
        $usuarios->fill($request->all());
        $usuarios->save();
        return redirect()->route('usuarios.index')->with('status','actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = Usuarios::findOrFail($id);
        $usuarios->delete();
        return redirect()->route('usuarios.index')->with('status','eliminado');
    }
}
