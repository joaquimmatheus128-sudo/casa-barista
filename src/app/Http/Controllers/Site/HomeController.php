<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Depoimento;
use App\Models\Categoria; // Ou o nome exato do seu Model de categoria
use App\Models\Galeria;
use App\Models\Produto;

class HomeController extends Controller{

    // Metodo HOME - Carregar a INDEX (HOME)
    public function home(){
    
        //Busque a lista de banners para exibir na home(Views)
        $listaBanner = Banner::where('status_banner', 'ATIVO')->inRandomOrder()->get();

        //dd($listaBanner);
        //var_dump($listaBanner);

        $categoriaMenu = Categoria::all(); // Ajuste a query se tiver filtro, ex: Categoria::where('status', 'ATIVO')->get();
        //$cardapio = Produto::where('status_produto', 'ATIVO')->inRandomOrder()->get();

        
        //Buscar os depoimentos APROVADO junto com os dados dos clientes
        $listaDepo = Depoimento::where('status_depoimento', 'APROVADO')->with('DepoimentoCliente')->orderByDesc('id_depoimento')->get();

        //Buscar as imagens ativas da galeria
        $listaGaleria = Galeria::where('status_galeria', 'ATIVO')->inRandomOrder()->get();

        //dd($listaDepo)->toArray();
        
        return view('site.home.home', compact('listaBanner', 'categoriaMenu', 'listaDepo', 'listaGaleria'));

    }


} // FIM DA CLASS