<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Productos;
use App\Marcas;

class ProductosController extends Controller
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
        $productoss = DB::table('tb_productos as p')
                    ->join('tb_marcas','p.id_marcas','=','tb_marcas.id_marcas')
                    ->select('id_producto','desc_producto',
                             'p.id_marcas','tb_marcas.descripcion_marca')
                    ->paginate(10);
           return view('productos.index', compact('productoss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marcass = Marcas::orderBy('descripcion_marca')->get();
        return view('productos.create',compact('marcass'));
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
            'desc_producto' => 'required|min:15',
            'id_marcas' => 'required'
        ]);

        $productos = new Productos;
        $productos->desc_producto = $request->desc_producto;
        $productos->id_marcas = $request->id_marcas;
        $productos->save();
        return redirect()->route('productos.index')->with('status','guardado');
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
        $productos = Productos::findOrFail($id);
        $marcass = Marcas::all();
        return view('productos.edit', compact('productos','marcass'));
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
        $productos = Productos::findOrFail($id);
        $productos->fill($request->all());
        $productos->save();
        return redirect()->route('productos.index')->with('status','actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos = Productos::findOrFail($id);
        $productos->delete();
        return redirect()->route('productos.index')->with('status','eliminado');
    }
}
