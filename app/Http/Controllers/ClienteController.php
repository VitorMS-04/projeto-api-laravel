<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function listar()
    {
        $array = [
            
            "nome" => "nome de teste"
        ];
        return response()->json($array,200);
    }
}
