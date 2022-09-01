<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\Provincia;

use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('localiza.municipio.municipio');
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
    public function store(Request $request,Provincia $p)
    {
        //

        $provincia_id = $p->consultarId($request->provincia);

         $insert = Municipio::create([
                'nome' => $request->nome,
                'provincia_id'=>$provincia_id

         ]);


         if ($insert){

            return response()->json('Municipio Cadastrado com Sucesso');
         }
         else{
            return response()->json('Municipio Não Cadastrado com Sucesso');

         }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function show(Municipio $municipio,$id)
    {
        //
$municipio_id = $municipio->consultarId($id);
        $districtos= $municipio->find($municipio_id)->Districtos;

        return response()->json($districtos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipio $municipio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipio $municipio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipio $municipio)
    {
        //
    }

    public function comunas(Municipio $municipio,$id)
    {
        # code...
        $municipio_id = $municipio->consultarId($id);
        $districtos= $municipio->find($municipio_id)->Comunas;

        return response()->json($districtos);
    }
}
