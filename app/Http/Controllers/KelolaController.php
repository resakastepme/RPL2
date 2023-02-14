<?php

namespace App\Http\Controllers;
use App\Models\Kelola;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelolaController extends Controller
{
    public function show(){

        $selectDB = DB::table('akun')->get();

        return view('admin.kelola.index', [
            'selectDB' => $selectDB
        ]);

    }

    public function tambahProses(Request $request){

        $nama = $request->input('nama');
        $username = $request->input('username');
        $password = $request->input('password');

        $array = array(
            'nama' => $nama,
            'username' => $username,
            'password' => md5($password),
            'created_at' => Carbon::now()
        );

        $insert = DB::table('akun')->insert($array);

        if($insert){
            return redirect('/kelola/admin#mulai')->with('alert', 'akunberhasil');
        }else{
            return redirect('/kelola/admin#mulai')->with('alert', 'akungagal');
        }

    }

    public function hapusProses($id){

        $delete = DB::table('akun')->where('id', $id)->delete();

        if($delete){
            return redirect('/kelola/admin#mulai')->with('alert', 'hapusberhasil');
        }else{
            return redirect('/kelola/admin#mulai')->with('alert', 'hapusgagal');
        }

    }

}
