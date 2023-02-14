<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelola extends Model
{
    use HasFactory;

    //  MANGGIL NAMA TABLE
    protected $table = "akun";
    // NENTUAN COLOUMN MANA YANG JADI PRIMARY KEY
    protected $primaryKey = "id";
    // NENTUAIN COLOUMN MANA YANG BISA DI ISI
    protected $fillable = [
        'nama', 'username', 'password'
    ];
    // PAKE TIMESTAMPS ATAU ENGGA? KALO ENGGA ISI FALSE
    public $timestamps = true;

}
