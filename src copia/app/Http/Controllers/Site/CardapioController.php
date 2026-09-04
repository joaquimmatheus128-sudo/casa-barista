<?php 

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Depoimento;
use App\Models\Galeria;
use App\Models\Categoria;
use App\Models\Produto;
class CardapioController extends Controller
{
    public function cardapio (?int $idCategoria = null)
    {
        //Buscar os depoimentos APROVADO junto com os dados dos clientes
        $listaDepo = Depoimento::where('status_depoimento', 'APROVADO')->with('DepoimentoCliente')->orderByDesc('id_depoimento')->get();

        //Buscar as imagens ativas da galeria
        $listaGaleria = Galeria::where('status_galeria', 'ATIVO')->inRandomOrder()->get();


        $listaCategorias = Categoria::where('status_categoria', 'ATIVO')->orderBy('nome_categoria')->get();
        //dd($listaCategorias);

        //Se nenhuma categorua estiver na URL
        if($idCategoria === null){
            $categoriaSelecionada = $listaCategorias->first();
        } else {
            $categoriaSelecionada = $listaCategorias->firstWhere('id_categoria', $idCategoria);
        }

        //Caso não tenha a categoria
        abort_if($categoriaSelecionada === null, 404, 'Categoria não encontrada');

        //Buscar somente os produtos da categoria selecionada
        $listaProdutos = Produto::where('status_produto', 'ATIVO')
        ->orderBy('nome_produto')->get();

        $produto = Produto::query()
        ->where('id_categoria', $categoriaSelecionada->id_categoria)
        ->where('status_produto', 'ATIVO')
        ->orderBy('nome_produto')
        ->get(); 

        //dd($produto);

        //dd($listaProdutos);

        return view('site.cardapio.cardapio', compact('listaProdutos', 'listaCategorias', 'categoriaSelecionada', 'listaDepo', 'listaGaleria', 'produto'));
    }
}