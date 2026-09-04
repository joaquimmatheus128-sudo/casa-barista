<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Linhadotempo;

class LinhadotempoController extends Controller{
    
public function linhadotempo() {
    
$listaLinhadotempo = Linhadotempo::orderByDesc('id_linha_tempo')->get();

    return view('admin.linhadotempo.index', compact('listaLinhadotempo'));
}

}