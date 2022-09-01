<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    use HasFactory;
    protected $fillable = [

        'provincia_id',
        'municipio_id',
        'districto_id',
        'comuna_id',
        'bairro',
        'rua',
        'ncasa'

    ];


    public function Provincia()
    {
        return $this->hasOne('App\Models\Provincia');
    }

    public function Municipio()
    {
        return $this->hasOne('App\Models\Municipio');
    }

     public function Districto()
    {


        return $this->hasOne('App\Models\Districto');
    }

    public function Comuna()
    {
        # code...

        return $this->hasOne('App\Models\Comuna');
    }

    public function consultarLocalizacao($nome)
    {
        # code...
        $w = $this->where('nome',$nome)->get();

        foreach ($w as $p) {
            # code...
            return $p->nome;
        }

    }

}
