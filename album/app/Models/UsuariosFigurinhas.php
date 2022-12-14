<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosFigurinhas extends Model {
    use HasFactory;
    protected $table = 'usuarios_figurinhas';
    protected $fillable = ["usuario_id", "figurinhas_id", "colada"];
    public $timestamps = false;
}
