<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Local;
use App\Productos;

class LocalController extends Controller
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
        $locales = DB::table('tb_local as l')
                    ->join('tb_productos','l.id_producto','=','tb_productos.id_producto')
                    ->select('l.id_local','l.descripcion_local','l.id_producto','tb_productos.desc_producto')
                    ->paginate(10);
           return view('local.index', compact('locales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productoss = Productos::orderBy('desc_producto')->get();
        return view('local.create',compact('productoss'));
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
            'descripcion_local' => 'required|min:5',
            'id_producto' => 'required',
        ]);

        $local = new Local;
        $local->descripcion_local = $request->descripcion_local;
        $local->id_producto = $request->id_producto;
        $local->save();
        return redirect()->route('local.index')->with('status','guardado');
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
        $local = Local::findOrFail($id);
        $productoss = Productos::all();
        return view('local.edit', compact('local','productoss'));
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
        $local = Local::findOrFail($id);
        $local->fill($request->all());
        $local->save();
        return redirect()->route('local.index')->with('status','actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $local = Local::findOrFail($id);
        $local->delete();
        return redirect()->route('local.index')->with('status','eliminado');
    }
}