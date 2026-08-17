<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;


class DashController extends Controller{

    // Carrega a página inicial do dashboard.
    public function dash(){
        return view('dash.dashboard.dashboard');
    }


} // FIM DA CLASS
