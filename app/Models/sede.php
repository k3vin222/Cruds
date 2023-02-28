<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sede extends Model
{
    use HasFactory;
    protected $primarykey= 'codigo';
    public $timestamps = false;
    protected $fillable = [
        'codigo',
        'nombre_sede',
        'especialidad_sede'


    ];

}
