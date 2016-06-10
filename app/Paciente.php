<?php

namespace experto;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
     protected $table = 'paciente';

    protected $fillable = [
        'CodPas', 'NomPas','PatMat','MatPas','FecNacPas','CiPas','LugPas','SexPas','DirPas','TelPas',
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
