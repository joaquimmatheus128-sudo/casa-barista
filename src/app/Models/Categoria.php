<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Categoria extends Model{

    protected $table = 'tbl_categoria';
    protected $primaryKey = 'id_categoria';

    public $timestamps = false;

    protected $fillable = [
        'nome_categoria',
        'status_categoria'
    ];
    public function produtos(){
        return $this->hasMany(Produto::class, 'id_categoria', 'id_categoria');
    }
}

