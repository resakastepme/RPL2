<?php

namespace App\Http\Controllers;

use App\Models\Remaja;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpRemajaController extends Controller
{
    public function upload(request $request){

        $file = $request->hasFile('img');

        if($file){
            $newFile = $request->file('img');
            $hashName = $newFile->store('images/info_remaja');
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
        $insertDB = DB::table('info_remaja')->insert($array);

        sleep(2);

        return redirect('/remaja/admin#mulai');

    }
}
