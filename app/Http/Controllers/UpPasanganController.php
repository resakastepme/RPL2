<?php

namespace App\Http\Controllers;

use App\Models\Pasangan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpPasanganController extends Controller
{
    public function upload(request $request){

        $file = $request->hasFile('img');

        if($file){
            $newFile = $request->file('img');
            $hashName = $newFile->store('images/info_pasangan');
        }else{
            echo " ERROR MESSAGE; THE FILE NOT UPLOADED.. YET.. I GUESS.. TRY AGAIN.. ";
        }

        $title = $request->input('judul');
        $article = $request->input('artikel');
        $source = $request->input('sumberpenulis');

        $array = array(
            'gambar' => $hashName,
            'judul' => $title,
            'artikel' => $article,
            'sumberpenulis' => $source,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        );
        $insertDB = DB::table('info_pasangan')->insert($array);

        // if($insertDB){
        //     $echo = "MESSAGE; SUCCESSFULLY UPDATE TO INFO_ORANG_TUA.. NC BANG";
        // }else{
        //     $echo = "ERROR MESSAGE; FAILED TO UPDATE TO DATABASE.. BAD LUCK HAAHAHA";
        // }

        return redirect('/input#info_pasangan');

    }
}
