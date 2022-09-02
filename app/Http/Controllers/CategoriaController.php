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

        //Essa funcão e responsavel por registar
    public function registar(validaCategoria $request)
    {
        Categoria::create([
            'nome' => $request->nome
        ]);

        return redirect()->route('categoria.index');
    }
//Esta funcao regista Categoria
        public function Categorias()
        {
            # code...
            $categoria = Categoria::all();
            return response()->json($categoria);
        }

        public function apagar($id)
        {
            if (!$categoria = Categoria::find($id)) {
                return redirect()->route('categoria.index');
            }
            $categoria->delete();
            return redirect()->route('categoria.index');
        }

        public function actualizar(validaCategoria $request, $id){
            if (!$categoria = Categoria::find($id)) {
              return redirect()->back();
             }
             $categoria->update($request->all());
             return redirect()->back();
          }

}
