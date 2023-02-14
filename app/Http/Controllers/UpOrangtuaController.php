<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use Carbon\Carbon;
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
        $source = $request->input('sumberpenulis');

        $array = array(
            'gambar' => $hashName,
            'judul' => $title,
            'artikel' => $article,
            'sumberpenulis' => $source,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        );
        $insertDB = DB::table('info_orang_tua')->insert($array);

        sleep(2);

        return redirect('/orangtua/admin#mulai');

    }
}
