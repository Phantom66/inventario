<?php

namespace App\Http\Controllers;

use App\BienNacional;

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
        $bien = new BienNacional();

        return dd($request);
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
