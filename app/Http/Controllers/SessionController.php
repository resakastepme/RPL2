<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelola;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{

    public function login(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');

        $query = DB::table('akun')->where('username', $username)->get();

        if(!$query){
            return ('GAGAL');
        }

        if($query->count() > 0){

            if(md5($password)  == $query[0]->password){

                $request->session()->put('nama', $query[0]->nama);
                $request->session()->put('attempt', time());

                return redirect('/dashboard/admin');

            }else{

                return redirect()->back()->with('alert', 'passwordsalah')->with('username', $username);

            }

        }else{

            return redirect()->back()->with('alert', 'datatidakcocok')->with('username', $username);

        }

    }

}
