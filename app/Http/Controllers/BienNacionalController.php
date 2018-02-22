<?php

namespace App\Http\Controllers;

use App\BienNacional;
use App\Persona;
use App\Unidad;
use App\Estatus;


use Illuminate\Http\Request;



class BienNacionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

       $bienes = BienNacional::orderBy('id','DESC')->paginate(10);

        return view('inventario.index', compact('bienes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('inventario.create');
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
        
        $persona = new Persona;
        $unidad = new Unidad;
        $estatus = new Estatus;
        $bien = new BienNacional;


        $persona->fill(

            $request->only('nombre', 'apellido', 'fec_egreso')

        );

        $persona->save();

        $unidad->fill(

            $request->only('nom_unidad', 'cod_ubi_admin', 'ubi_geo')

        );

        $unidad->save();

        $estatus->fill(

            $request->only('descripcion')
        );

        //$estatus->save();

        $bien->fill(

            $request->only('cod_bien', 'nombre', 'marca', 'modelo', 'color', 
                           'serial', 'fec_adquisicion', 'valor')
        );
        $bien->unidad_id = $unidad->id;
        $bien->persona_id = $persona->id;
        $bien->estatus_bien_id = 1;
        $bien->user_id = $request->user()->id;        
        $bien->save();

        return "BienNacional registrado satisfactoriamente";//verificar esta ruta
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BienNacional  $bienNacional
     * @return \Illuminate\Http\Response
     */
    public function show(BienNacional $bien)
    {
        //

         return view('inventario.show')->with('bienNacional', $bien);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BienNacional  $bienNacional
     * @return \Illuminate\Http\Response
     */
    public function edit(BienNacional $bienNacional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BienNacional  $bienNacional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BienNacional $bienNacional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BienNacional  $bienNacional
     * @return \Illuminate\Http\Response
     */
    public function destroy($bien)
    {
        //

        $bienNacional = BienNacional::find($bien);

       $bienNacional->delete();

        return back()->with('info', 'Este item fue desincorporado.');

    }
}
