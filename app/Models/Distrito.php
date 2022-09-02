<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;

    protected $fillable = ['nome','municipio_id'];

    public function consultarId($nome)
    {
        # code...dd
        $w = $this->where('nome',$nome)->get();

        foreach ($w as $p) {
            # code...
            return $p->id;

        }

    }
}
