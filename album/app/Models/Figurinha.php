<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Figurinha extends Model
{
    protected $table = 'figurinhas';
    protected $fillable = ["nome", "dtnasc", "naturalidade","file_path","numero"];
    public $timestamps = false;

    public static function salvarAlbum($uid, $fid){
        DB::table('usuarios_figurinhas')->insert([
            'usuario_id' => $uid,
            'figurinhas_id' => $fid,
            'colada' => 0
        ]);
    }
}
