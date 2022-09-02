<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $fillable=['nome','provincia_id'];


    public function consultarId($nome)
    {
        # code...
        $w = $this->where('nome',$nome)->get();

        foreach ($w as $p) {
            # code...
            return $p->id;

        }

    }
//dd
    public function Districtos()
    {
        # code...
    return $this->hasMany('App\Models\Distrito');

    }

    public function Comunas()
    {
        # code...
    return $this->hasMany('App\Models\Comuna');

    }

}
