<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    use HasFactory;
    protected $primarykey= 'nro_doc';
    public $timestamps = false;
    protected $fillable = [
        'nro_doc',
        'nombre',
        'apellido'


    ];

}