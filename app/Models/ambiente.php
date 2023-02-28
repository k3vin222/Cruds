<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ambiente extends Model
{
    use HasFactory;
    protected $primarykey= 'nro_ambiente';
    public $timestamps = false;
    protected $fillable = [
        'nro_ambiente',
        'nombre_ambiente',
        'aforo',
        'especialidad'


    ];

}