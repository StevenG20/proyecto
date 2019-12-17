<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Proveedor;

class ProveedorController extends Controller
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
        $proveedores = DB::table('tb_proveedor')
                    ->select('id_proveedor','nombre_proveedor','apellido_proveedor',
                             'correo_proveedor','telefono_proveedor','genero_proveedor',
                             'tipo_docu_proveedor')
                    ->paginate(10);
           return view('proveedor.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $proveedores = Proveedor::orderBy('nombre_proveedor')->get();
        return view('proveedor.create',compact('proveedores'));
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
            'nombre_proveedor' => 'required|min:5',
            'apellido_proveedor' => 'required',
            'correo_proveedor' => 'required',
            'telefono_proveedor' => 'required',
            'genero_proveedor' => 'required',
            'tipo_docu_proveedor' => 'required',
        ]);

        $proveedor = new Proveedor;
        $proveedor->nombre_proveedor = $request->nombre_proveedor;
        $proveedor->apellido_proveedor = $request->apellido_proveedor;
        $proveedor->correo_proveedor = $request->correo_proveedor;
        $proveedor->telefono_proveedor = $request->telefono_proveedor;
        $proveedor->genero_proveedor = $request->genero_proveedor;
        $proveedor->tipo_docu_proveedor = $request->tipo_docu_proveedor;
        $proveedor->save();
        return redirect()->route('proveedor.index')->with('status','guardado');
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
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedor.edit', compact('proveedor'));
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
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->fill($request->all());
        $proveedor->save();
        return redirect()->route('proveedor.index')->with('status','actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return redirect()->route('proveedor.index')->with('status','eliminado');
    }
}
