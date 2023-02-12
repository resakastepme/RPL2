<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpKonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function upload(Request $request)
    {
        // REQ FILE DARI NAME YANG ADA DI INPUT.BLADE
        $file = $request->hasFile('img');

        if($file){
            $newFile = $request->file('img');
            $hashName = $newFile->store('images/konsultasi');
        }else{
            echo " ERROR MESSAGE; THE FILE NOT UPLOADED.. YET.. I GUESS.. TRY AGAIN.. ";
        }

        // REQ FILE DARI NAMAE=judul YANG ADA DI INPUT.BLADE
        $title = $request->input('judul');
        // REQ FILE DARI NAMAE=deskripsi YANG ADA DI INPUT.BLADE
        $deskripsi = $request->input('deskripsi');
        $gejala = $request->input('gejala');
        $sumber = $request->input('sumberpenulis');
        

        $array = array(
            'gambar' => $hashName,
            'judul' => $title,
            'deskripsi' => $deskripsi,
            'gejala' => $gejala,
            'sumberpenulis' => $sumber,
            // JANGAN LUPA PANGGIL PACKAGE CARBON NYA
            // use Carbon\Carbon;
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        );
        // INI QUERY NYA, PAKE METHOD QUERY BUILDER
        // use Illuminate\Support\Facades\DB;
        $insertDB = DB::table('konsultasi')->insert($array);

            // SEHABIS PENCET TOMBOL UPDATE, MAU DI ARAHKAN KEMANA?
        return redirect('/input#konsultasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
