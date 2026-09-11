<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function categoria()
    {
        $listaCategoria = Categoria::orderByDesc('id_categoria')->get();
        return view('admin.categoria.index', compact('listaCategoria'));
    }

    public function store(Request $request)
    {
        // 1- Validar dados
        $request->validate([
            'nome_categoria'   => 'required|max:100',
            'status_categoria' => 'required'
        ]);

        // 2- Salvar no banco de dados
        Categoria::create([
            'nome_categoria'   => $request->nome_categoria,
            'status_categoria' => $request->status_categoria,
        ]);

        // 3- Redirecionar com mensagem
        return redirect()->route('admin.categoria.index')->with('success', 'Categoria cadastrada com sucesso!');
    }
}