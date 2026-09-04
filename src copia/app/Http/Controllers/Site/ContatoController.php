<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Banner;

class ContatoController extends Controller
{
    public function contato ()
    {
        //Busque a lista de banners para exibir na home(Views)
        $listaBanner = Banner::where('status_banner', 'ATIVO')->inRandomOrder()->get();

        return view('site.contato.contato', compact('listaBanner'));
    }
}