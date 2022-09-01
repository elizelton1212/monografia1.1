<?php

namespace App\Http\Controllers;

use App\Models\Distrito;
use App\Models\Provincia;
use App\Models\Municipio;

use Illuminate\Http\Request;


class DistritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('localiza.districto.cadastrarDistricto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Municipio $m)
    {
        //
        $municipio_id=$m->consultarId($request->municipio);

        $insert = Distrito::create([

            'nome'=>$request->nome,
            'municipio_id'=>$municipio_id
        ]);

        if ($insert){
            return response()->json('Distrito Cadastrado com sucesso');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function show(Distrito $distrito)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Distrito $distrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distrito $distrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distrito $distrito)
    {
        //
    }

    public function consultarMunicipios($provincia,Provincia $p)
    {
        # code...

        $provincia_id= $p->consultarId($provincia);

        $municipios=$p->find($provincia_id)->ProvinciaMunicipio;
        return response()->json($municipios);

    }
}
