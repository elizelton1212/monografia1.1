<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';

    protected $fillable = ['nome'];

    public function consultarId($nome)
    {
        # code...  d
        $w = $this->where('nome',$nome)->get();

        foreach ($w as $p) {
            # code...gfgf
            return $p->id;

        }

    }
}
