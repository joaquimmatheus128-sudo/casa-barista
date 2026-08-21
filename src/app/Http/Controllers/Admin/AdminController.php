<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class AdminController extends Controller{

    // Carrega a página inicial do dashboard.
    public function dashboard(){
        return view('admin.dashboard.dashboard');
    }


} // FIM DA CLASS
