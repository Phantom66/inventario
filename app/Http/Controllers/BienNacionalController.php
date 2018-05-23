<?php

namespace App\Http\Controllers;

use App\BienNacional;
use App\Persona;
use App\Unidad;
use App\Estatus;


use App\Http\Requests\BienNacionalRequest;



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

       $bienes = BienNacional::orderBy('id','DESC')->paginate(5);

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

        $estatus = Estatus::all();

        return view('inventario.create', compact('estatus'));
    }

    public function vistaPrevia(){

        return view('inventario.vista');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BienNacionalRequest $request)
    {
        //
        
        $persona = new Persona;
        $unidad = new Unidad;
        $bien = new BienNacional;


        $persona->fill(

            $request->only('n_persona', 'apellido', 'fec_egreso')

        );

        $persona->save();

        $unidad->fill(

            $request->only('n_unidad', 'cod_ubi_admin', 'ubi_geo')

        );

        $unidad->save();


        $bien->fill(

            $request->only('cod_bien', 'n_bien', 'marca', 'modelo', 'color', 
                           'serial', 'fec_adquisicion', 'valor')
        );
        $bien->unidad_id = $unidad->id;
        $bien->persona_id = $persona->id;
        $bien->estatus_bien_id = $request->get('estatus_id');
        $bien->user_id = $request->user()->id;        
        $bien->save();

        return redirect()->route('inventario_path')->with('info', "Los datos se registraron correctamente.");
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

       
         //Se está realizando de esta manera para capturara el pdf
         return  view('inventario.show')->with('bienNacional', $bien);


    }

   public function pdf(BienNacional $bien){

             
        $pdf = \PDF::loadView('inventario.vista', ['bienNacional' => $bien]);

        return $pdf->download('Listado.pdf');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BienNacional  $bienNacional
     * @return \Illuminate\Http\Response
     */
    public function edit($bien)
    {
        //
        $bienNacional = BienNacional::find($bien);

        $status = Estatus::all();


        return view('inventario.edit')
        ->with(['bienNacional'=>$bienNacional])
        ->with(['estatus' => $status]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BienNacional  $bienNacional
     * @return \Illuminate\Http\Response
     */
    public function update(BienNacionalRequest $request,  $bien)
    {


        $bienNacional = BienNacional::find($bien);

        $bienNacional->update(

            $request->only('cod_bien', 'n_bien', 'marca', 'modelo', 'color', 
                           'serial', 'fec_adquisicion', 'valor')
        );


        $persona = Persona::find($bien);

        $persona->update(

                $request->only('n_persona', 'apellido', 'fec_egreso')
        );

        $unidad = Unidad::find($bien);

        $unidad->update(

            $request->only('n_unidad', 'cod_ubi_admin', 'ubi_geo')

        );



        $bienNacional->estatus_bien_id = $request->get('estatus_id');
        $bienNacional->save();


        return redirect()->route('inventario_path')->with('info', "Los datos se actualizaron correctamente.");
        
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
