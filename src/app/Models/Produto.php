<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

Class Produto extends Model{

    protected $table = 'tbl_produto';
    protected $primaryKey = 'id_produto';

    public $timestamps = false;

    protected $fillable = [
        'nome_produto',
        'id_categoria',
        'descricao_curta_produto',
        'descricao_longa_produto',
        'valor_produto',
        'imagem_produto',
        'destaque_produto',
        'status_produto'
    ];
    public function categoria(){
    return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }
}