<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    //  MANGGIL NAMA TABLE
    protected $table = "konsultasi";
    // NENTUAN COLOUMN MANA YANG JADI PRIMARY KEY
    protected $primaryKey = "id";
    // NENTUAIN COLOUMN MANA YANG BISA DI ISI
    protected $fillable = [
        'gambar', 'judul', 'deskripsi','gejala','sumberpenulis'
    ];
    // PAKE TIMESTAMPS ATAU ENGGA? KALO ENGGA ISI FALSE
    public $timestamps = true;


}
