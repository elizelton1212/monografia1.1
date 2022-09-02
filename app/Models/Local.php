<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $fillable =['nome','telefone','email','site','nif','categoria_id','localizacao_id','categoria_id'];
}
//dd
