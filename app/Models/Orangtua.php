<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
    use HasFactory;

    protected $table = "info_orang_tua";
    protected $primaryKey = 'id';
    protected $fillable = [
        'gambar','judul','artikel'
    ];
    public $timestamps = true;

}
