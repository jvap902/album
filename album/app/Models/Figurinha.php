<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Figurinha extends Model
{
    protected $table = 'figurinhas';
    protected $fillable = ["nome", "dtnasc", "naturalidade","file_path","created_at", "updated_at"];
}
