<?php

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SobreController;
use App\Http\Controllers\Site\EventosController;
use App\Http\Controllers\Site\ContatoController;
use App\Http\Controllers\Site\CardapioController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\GaleriaController;
use App\Http\Controllers\Admin\ProdutoController;
use App\Http\Controllers\Admin\LinhadotempoController;
use App\Http\Controllers\Admin\CategoriaController;


use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');

Route::get('/eventos', [EventosController::class, 'eventos'])->name('eventos');
Route::get('/cardapio', [CardapioController::class, 'cardapio'])->name('cardapio');

Route::get('/cardapio/categoria/{idCategoria}', [CardapioController::class, 'cardapio'])->name('cardapio.categoria');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

//Conteúdo do dashboard

    
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


    // CRUD BANNER
Route::get('/dashboard/banner', [BannerController::class, 'index'])->name('admin.banner.index'); // Listar banners
    Route::post('/dashboard/banner', [BannerController::class, 'store'])->name('admin.banner.store'); // Criar banner
    Route::get('/dashboard/banner/{id}/edit', [BannerController::class, 'edit'])->name('admin.banner.edit'); // Abrir o form de editar banner
    Route::put('/dashboard/banner/{id}', [BannerController::class, 'update'])->name('admin.banner.update'); // Atualizar banner
    Route::patch('/dashboard/banner/{id}/status', [BannerController::class, 'status'])->name('admin.banner.status'); // Ativar ou desativar banner

    // CRUD GALERIA
    Route::get('/dashboard/galeria', [GaleriaController::class, 'galeria'])->name('admin.galeria.index');
    Route::post('/dashboard/galeria', [GaleriaController::class, 'store'])->name('admin.galeria.store');
    Route::get('/dashboard/galeria/{id}/edit', [GaleriaController::class, 'edit'])->name('admin.galeria.edit');
    Route::put('/dashboard/galeria/{id}', [GaleriaController::class, 'update'])->name('admin.galeria.update');
    Route::patch('/dashboard/galeria/{id}/status', [GaleriaController::class, 'status'])->name('admin.galeria.status');
    

    // CRUD PRODUTO
    Route::get('/dashboard/produto', [ProdutoController::class, 'produto'])->name('admin.produto.index');

    // CRUD CATEGORIA   
    Route::get('/dashboard/categoria', [CategoriaController::class, 'categoria'])->name('admin.categoria.index');
    Route::post('/dashboard/categoria', [CategoriaController::class, 'store'])->name('admin.categoria.store');
    Route::get('/dashboard/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('admin.categoria.edit');
    Route::put('/dashboard/categoria/{id}', [CategoriaController::class, 'update'])->name('admin.categoria.update');
    Route::delete('/dashboard/categoria/{id}', [CategoriaController::class, 'destroy'])->name('admin.categoria.destroy');

});  



Route::get('/dashboard/usuario', [UsuarioController::class, 'usuario'])->name('admin.usuario.index');

Route::get('/dashboard/cliente', [ClienteController::class, 'cliente'])->name('admin.cliente.index');
Route::get('/dashboard/linhadotempo', [LinhadotempoController::class, 'linhadotempo'])->name('admin.linhadotempo.index');

