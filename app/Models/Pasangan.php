<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasangan extends Model
{
    use HasFactory;

    protected $table = "info_pasangan";
    protected $primaryKey = 'id';
    protected $fillable = [
        'gambar','judul','artikel','sumberpenulis'
    ];
    public $timestamps = true;
}
