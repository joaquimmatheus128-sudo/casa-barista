<?php

namespace App\Http\Controllers\Site;

use App\Models\Depoimento;
use App\Http\Controllers\Controller;

class SobreController extends Controller
{
    public function sobre ()
    {
        //Buscar os depoimentos APROVADO junto com os dados dos clientes
        $listaDepo = Depoimento::where('status_depoimento', 'APROVADO')->with('DepoimentoCliente')->orderByDesc('id_depoimento')->get();
        
        
        return view('site.sobre.sobre', compact('listaDepo'));
    }
}