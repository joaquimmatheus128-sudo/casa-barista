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
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/dashboard/banner', [BannerController::class, 'banner'])->name('admin.banner.index');
Route::get('/dashboard/usuario', [UsuarioController::class, 'usuario'])->name('admin.usuario.index');
Route::get('/dashboard/galeria', [GaleriaController::class, 'galeria'])->name('admin.galeria.index');
Route::get('/dashboard/cliente', [ClienteController::class, 'cliente'])->name('admin.cliente.index');
Route::get('/dashboard/produto', [ProdutoController::class, 'produto'])->name('admin.produto.index');
Route::get('/dashboard/linhadotempo', [LinhadotempoController::class, 'linhadotempo'])->name('admin.linhadotempo.index');
Route::get('/dashboard/categoria', [CategoriaController::class, 'categoria'])->name('admin.categoria.index');
