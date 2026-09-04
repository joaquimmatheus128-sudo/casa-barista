<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;

class ProdutoController extends Controller{
    
public function produto() {
    
    $listaProdutos = Produto::with('categoria')->orderByDesc('id_produto')->get();

    return view('admin.produto.index', compact('listaProdutos'));
}

}