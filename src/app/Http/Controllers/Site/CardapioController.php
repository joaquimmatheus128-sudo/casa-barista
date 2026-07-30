<?php 

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;
class CardapioController extends Controller
{
    public function cardapio ()
    {
        $listaCategorias = Categoria::where('status_categoria', 'ATIVO')->orderBy('nome_categoria')->get();
        //dd($listaCategorias);

        $listaProdutos = Produto::where('status_produto', 'ATIVO')->orderBy('nome_produto')->get();
        //dd($listaProdutos);

        return view('site.cardapio.cardapio', compact('listaProdutos', 'listaCategorias'));
    }
}