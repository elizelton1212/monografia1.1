<?php

namespace App\Http\Controllers;

use App\Models\Comuna;
use App\Models\Localizacao;
use App\Models\Municipio;
use App\Models\Provincia;
use Illuminate\Http\Request;

class LocalizacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //d
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Localizacao  $localizacao
     * @return \Illuminate\Http\Response
     */
    public function show(Localizacao $localizacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Localizacao  $localizacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Localizacao $localizacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Localizacao  $localizacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Localizacao $localizacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Localizacao  $localizacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Localizacao $localizacao)
    {
        //
    }


    public function cadastrarProvincia(Provincia $p, Request $request)
    {
        # code...

       $insert= $p->create([

        'nome'=>$request->nome

        ]);
    }

    public function cadastrarMunicipio(Municipio $m, Request $request)
    {
        # code...

    }

    public function cadastrarComuna(Comuna $c, Request $request)
    {
        # code...
    }
}
