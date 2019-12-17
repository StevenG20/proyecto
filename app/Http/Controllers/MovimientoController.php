<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Movimiento;
use App\Productos;
use App\Usuarios;
use App\Proveedor;
use App\Asesor;
use App\Local;

class MovimientoController extends Controller
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
        $movimientos = DB::table('tb_movimiento as mo')
                    ->join('tb_productos','mo.id_producto','=','tb_productos.id_producto')
                    ->join('tb_usuarios','mo.id_usuario','=','tb_usuarios.id_usuario')
                    ->join('tb_proveedor','mo.id_proveedor','=','tb_proveedor.id_proveedor')
                    ->join('tb_asesor','mo.id_asesor','=','tb_asesor.id_asesor')
                    ->join('tb_local','mo.id_local','=','tb_local.id_local')
                    ->select('id_movimiento', 'mo.id_producto','tb_productos.desc_producto',
                             'fech_entrada','asesor_entrada','local_entrada',
                             'imei','asesor_salida','local_salida','obser_movimi',
                             'mo.id_usuario','tb_usuarios.nomb_usuario',
                             'mo.id_proveedor','tb_proveedor.nombre_proveedor',
                             'mo.id_asesor','tb_asesor.nombre_asesor',
                             'mo.id_local','tb_local.descripcion_local')
                    ->paginate(10);
           return view('movimiento.index', compact('movimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productoss = Productos::all();
        $usuarioss = Usuarios::all();
        $proveedores = Proveedor::all();
        $asesores = Asesor::all();
        $locales = Local::all();
        return view('movimiento.create', compact('productoss','usuarioss',
                                             'proveedores','asesores','locales'));
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
            'id_producto' => 'required',
            'fech_entrada' => 'required',
            'asesor_entrada' => 'required',
            'local_entrada' => 'required',
            'imei' => 'required',
            'asesor_salida' => 'required',
            'local_salida' => 'required',
            'obser_movimi' => 'required|min:15',
            'id_usuario' => 'required',
            'id_proveedor' => 'required',
            'id_asesor' => 'required',
            'id_local' => 'required',
        ]);

        $movimiento = new Movimiento;
        $movimiento->id_producto = $request->id_producto;
        $movimiento->fech_entrada = $request->fech_entrada;
        $movimiento->asesor_entrada = $request->asesor_entrada;
        $movimiento->local_entrada = $request->local_entrada;
        $movimiento->imei = $request->imei;
        $movimiento->asesor_salida = $request->asesor_salida;
        $movimiento->local_salida = $request->local_salida;
        $movimiento->obser_movimi = $request->obser_movimi;
        $movimiento->id_usuario = $request->id_usuario;
        $movimiento->id_proveedor = $request->id_proveedor;
        $movimiento->id_asesor = $request->id_asesor;
        $movimiento->id_local = $request->id_local;
        $movimiento->save();
        return redirect()->route('movimiento.index')->with('status','guardado');
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
        $movimiento = Movimiento::findOrFail($id);
        $productoss = Productos::all();
        $usuarioss = Usuarios::all();
        $proveedores = Proveedor::all();
        $asesores = Asesor::all();
        $locales = Local::all();
        return view('movimiento.edit', compact('movimiento','productoss','usuarioss','proveedores','asesores','locales'));
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
        $movimiento = Movimiento::findOrFail($id);
        $movimiento->fill($request->all());
        $movimiento->save();
        return redirect()->route('movimiento.index')->with('status','actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movimiento = Movimiento::findOrFail($id);
        $movimiento->delete();
        return redirect()->route('movimiento.index')->with('status','eliminado');
    }
}
