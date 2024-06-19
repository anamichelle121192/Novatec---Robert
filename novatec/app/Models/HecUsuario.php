<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HecUsuario extends Model
{
    protected $table = '00_hec_usuario';
    protected $primaryKey = 'id_usua';
    public $timestamps = false;

    protected $fillable = [
        'id_usua', 'usua_nomb', 'usua_user', 'usua_tok', 'id_per'
    ];
}
