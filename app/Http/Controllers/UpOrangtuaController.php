<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class UpOrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function upload(Request $request)
    {
        $file = $request->hasFile('img');

        if($file){
            $newFile = $request->file('img');
            $hashName = $newFile->store('images/info_orangtua');
        }else{
            echo " ERROR MESSAGE; THE FILE NOT UPLOADED.. YET.. I GUESS.. TRY AGAIN.. ";
        }

        $title = $request->input('judul');
        $article = $request->input('artikel');

        $array = array(
            'gambar' => $hashName,
            'judul' => $title,
            'artikel' => $article
        );
        $insertDB = DB::table('info_orang_tua')->insert($array);

        if($insertDB){
            $echo = "MESSAGE; SUCCESSFULLY UPDATE TO INFO_ORANG_TUA.. NC BANG";
        }else{
            $echo = "ERROR MESSAGE; FAILED TO UPDATE TO DATABASE.. BAD LUCK HAAHAHA";
        }

        return view('input', [
            'echo' => $echo
        ]);

    }
}
