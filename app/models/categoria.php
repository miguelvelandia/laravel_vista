<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table='categorias';

    protected $fillable = ['id', 'nombre'];

    
}
