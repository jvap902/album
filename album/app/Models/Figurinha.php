<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sticker extends Model
{
    protected $table = 'figurinhas';
    protected $fillable = ["nome", "dtnasc", "naturalidade","file_path","created_at", "updated_at"];
}
