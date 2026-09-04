<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Usuario extends Model{

    protected $table = 'tbl_usuarios';
    protected $primaryKey = 'id_usuarios';

    public $timestamps = false;

    protected $fillable = [
        'nome_usuarios',
        'email_usuarios',
        'foto_usuarios',
        'nivel_usuarios',
        'status_usuarios',
    ];
}