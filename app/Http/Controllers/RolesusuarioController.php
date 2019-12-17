<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Rolesusuario;
use App\Rol;
use App\Usuarios;

class RolesusuarioController extends Controller
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
        $rolesusuarioss = DB::table('tb_roles_x_usuarios as role')
                    ->join('tb_roles','role.id_rol','=','tb_roles.id_rol')
                    ->join('tb_usuarios','role.id_usuario','=','tb_usuarios.id_usuario')
                    ->select('id_roles_usuarios','role.id_rol','tb_roles.nom_rol_usuario',
                             'role.id_usuario','tb_usuarios.nomb_usuario')
                    ->paginate(10);
           return view('rolesusuario.index', compact('rolesusuarioss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Rol::all();
        $usuarioss = Usuarios::all();
        return view('rolesusuario.create', compact('roles','usuarioss'));
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
            'id_rol' => 'required',
            'id_usuario' => 'required',
        ]);

        $rolesusuario = new Rolesusuario;
        $rolesusuario->id_rol = $request->id_rol;
        $rolesusuario->id_usuario = $request->id_usuario;
        $rolesusuario->save();
        return redirect()->route('rolesusuario.index')->with('status','guardado');
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
        $rolesusuario = Rolesusuario::findOrFail($id);
        $roles = Rol::all();
        $usuarioss = Usuarios::all();
        return view('rolesusuario.edit', compact('rolesusuario','roles','usuarioss'));
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
        $rolesusuario = Rolesusuario::findOrFail($id);
        $rolesusuario->fill($request->all());
        $rolesusuario->save();
        return redirect()->route('rolesusuario.index')->with('status','actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rolesusuario = Rolesusuario::findOrFail($id);
        $rolesusuario->delete();
        return redirect()->route('rolesusuario.index')->with('status','eliminado');
    }
}
