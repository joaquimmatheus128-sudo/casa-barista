<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeria;
use Illuminate\Http\Request;

class GaleriaController extends Controller {

    public function galeria() {
        $listaGaleria = Galeria::orderByDesc('id_galeria')->get();
        return view('admin.galeria.index', compact('listaGaleria'));
    }

    // CADASTRAR GALERIA
    public function store(Request $request) {

        // 1- Validar os dados
        $request->validate([
            'nome_galeria'   => 'required|max:50',
            'img-galeria'    => 'required|image',
            'status_galeria' => 'required'
        ]);

        // 2- Receber a imagem enviada
        $imagem = $request->file('img-galeria');

        // 3- Criar um nome para a imagem
        $nomeImg = time() . '_' . $imagem->getClientOriginalName();
        // 4- Salvar a imagem na pasta do projeto
        $imagem->move(public_path('barista/assets/galeria'), $nomeImg);

        // 5- Cadastrar no banco de dados 
        Galeria::create([
            'nome_galeria'   => $request->nome_galeria,
            'imagem_galeria' => 'galeria/' . $nomeImg,
            'status_galeria' => $request->status_galeria,
        ]);

        // 6- Voltar e enviar uma mensagem
        return redirect()->route('admin.galeria.index')->with('success', 'Imagem cadastrada com sucesso!');
    }
}