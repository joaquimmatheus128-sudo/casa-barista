<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller{
    
    public function banner() {
        
        $listaBanner = Banner::orderByDesc('id_banner')->get();



        return view('admin.banner.index', compact('listaBanner'));
    }

    // CADASTRAR BANNER
    public function store(Request $request) {
        

        // 1- Validar os dados
        $request->validate([
            'titulo_banner' => 'required|max:50',
            'img-banner'    => 'required|image', // <--- Ajustado aqui!
            'status_banner' => 'required'
        ]);

        //2- Receber a imagem enviada
        $imagem = $request->file('img-banner');

        // 3- Criar um nome para a imagem
        $titulo = $request->titulo_banner;
        $nomeImg = time() . '_' . $imagem->getClientOriginalName();

        // 4- Salvar a imagem na pasta do projeto
        $imagem->move(public_path('barista/assets/banner'), $nomeImg);

        // 5- Cadastrar no banco de dados
        Banner::create([
            'titulo_banner' => $request->titulo_banner,
            'imagem_banner' => 'banner/' . $nomeImg,
            'status_banner' => $request->status_banner,
        ]);

        // 6- Voltar e enviar uma mensagem
        return redirect()->route('admin.banner.index')->with('success', 'Banner cadastrado com sucesso!');

    }

}