<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\DimEstado;

class PruebaController extends Controller
{
    public function index() {

        $sq = DimEStado::find('4');
        
        // // $sq->id_esta = 'DEMO';
        // // $sq->esta_nomb = 'DEMO';
        // // $sq->save();

        // dd($sq);

        return View('prueba.prueba',[
            'id' => $sq->esta_nomb
        ]);
        
    }
}
