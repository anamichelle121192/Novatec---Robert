<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DimEstado extends Model
{

    // protected $connection = 'mysql';
    protected $table = '00_dim_estado';
    protected $primaryKey = 'id_esta';
    public $timestamps = false;

    use HasFactory;
}
