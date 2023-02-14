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
        sleep(2);

        return redirect('/pasangan/admin#mulai');

    }
}
