<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\validaCategoria;
class CategoriaController extends Controller
{
    public function index()
    {
        $Categoria = Categoria::get();
        //dd($Categoria);
        return view('admin/categoria/categoria', compact('Categoria'));
    }

    public function criar()
    {
       
        return view('admin/categoria/novo');
    }

    public function registar(validaCategoria $request)
    {
        Categoria::create([
            'nome' => $request->nome
        ]);

        return redirect()->route('categoria.index');
    }
}
