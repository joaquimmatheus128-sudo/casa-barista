<?php 

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Depoimento;

class EventosController extends Controller
{
    public function eventos ()
    {   
        //Buscar os depoimentos APROVADO junto com os dados dos clientes
        $listaDepo = Depoimento::where('status_depoimento', 'APROVADO')->with('DepoimentoCliente')->orderByDesc('id_depoimento')->get();
        return view('site.eventos.eventos', compact('listaDepo'));
    }
}