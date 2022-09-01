<?php

namespace App\Http\Controllers;

use App\Models\Distrito;
use App\Models\Local;
use App\Models\Localizacao;
use App\Models\Provincia;
use App\Models\Categoria;
use App\Models\Municipio;
use App\Models\Comuna;


use Illuminate\Http\Request;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Local.index');
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
    public function store(Request $request,Categoria $c,Localizacao $l,Provincia $p,Municipio $m,Comuna $comu,Distrito $d)
    {
        //
        $provincia_id=$p->consultarId($request->provincia);
        $municipio_id=$m->consultarId($request->municipio);
        $distrito_id=$d->consultarId($request->distrito);
        $comuna_id=$comu->consultarID($request->comuna);
        $categoria_id=$c->consultarId($request->categoria);

        $localizacao=$l->create([
            'provincia_id'=>$provincia_id,
            'municipio_id'=>$municipio_id,
            'distrito_id'=>$distrito_id,
            'comuna_id'=>$comuna_id,
            'bairro'=>$request->bairro,
            'rua'=>$request->rua,
            'ncasa'=>$request->ncasa
        ]);


        if($localizacao){
          $insert=Local::create([
            'nome'=>$request->nome,
            'telefone'=>$request->telefone,
            'site'=>$request->site,
            'nif'=>$request->nif,
            'email'=>$request->email,
            'localizacao_id'=>$localizacao->id,
            'categoria_id'=>$categoria_id
          ]);

          if($insert){
            return response()->json('Local Cadastrado com Sucesso');
        }else{
            return response()->json('Local Não foi cadastrado');

          }

    }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function show(Local $local)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function edit(Local $local)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Local $local)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function destroy(Local $local)
    {
        //
    }
}
