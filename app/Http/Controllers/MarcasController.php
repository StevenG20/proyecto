<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Marcas;

class MarcasController extends Controller
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
        $marcass = DB::table('tb_marcas as ma')
                    ->select('id_marcas','descripcion_marca')
                    ->paginate(10);
           return view('marcas.index', compact('marcass'));
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
        return view('marcas.create',compact('marcass'));
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
            'descripcion_marca' => 'required|min:15'
        ]);

        $marcas = new Marcas;
        $marcas->descripcion_marca = $request->descripcion_marca;
        $marcas->save();
        return redirect()->route('marcas.index')->with('status','guardado');
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
        $marcas = Marcas::findOrFail($id);
        return view('marcas.edit', compact('marcas'));
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
        $marcas = Marcas::findOrFail($id);
        $marcas->fill($request->all());
        $marcas->save();
        return redirect()->route('marcas.index')->with('status','actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marcas = Marcas::findOrFail($id);
        $marcas->delete();
        return redirect()->route('marcas.index')->with('status','eliminado');
    }
}
