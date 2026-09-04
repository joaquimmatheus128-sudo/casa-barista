<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usuario;

class UsuarioController extends Controller{
    
public function usuario() {
    
$listaUsuarios = Usuario::orderByDesc('id_usuarios')->get();

    return view('admin.usuario.index', compact('listaUsuarios'));
}

}