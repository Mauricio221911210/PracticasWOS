<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MunicipiosModel extends Model
{
    protected $table = 'tb_municipios';
    protected $primarykey = 'id_municipio';
    protected $fillable = ['nombre','id_estado'];
}
