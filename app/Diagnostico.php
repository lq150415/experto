<?php

namespace experto;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnostico';

    protected $fillable = [
        'CodDia', 'fecDia','pesAct','pesIde','masGra','estatura','conHue','imc','porgra','CodPas','CodMed','CodEst','codEstNut'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'id',
    ];
}
