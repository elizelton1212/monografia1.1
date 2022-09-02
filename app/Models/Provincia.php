<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $t;

//dd
    protected $fillable=['nome'];

    public function ProvinciaMunicipio()
    {
    	# code...

    	return $this->hasMany('App\Models\Municipio');
    }



    public function consultarId($nome)
    {
        # code...
        $w = $this->where('nome',$nome)->get();

        foreach ($w as $p) {
            # code...
            return $p->id;

        }

    }
}
