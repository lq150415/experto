<?php

namespace experto;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Medico extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'medico';

    protected $fillable = [
        'CodMed', 'NomMed','PatMed','MadMed','FecNacMed','CIMed','UsuMed','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'id','password', 'remember_token',
    ];
}
