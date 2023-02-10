<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selectDB = DB::table('info_orang_tua')->orderByDesc('id')->simplePaginate(5);
        $selectSorotan = DB::table('info_orang_tua')->orderBy('id', 'ASC')->limit(5)->get();

        return view('info_orangtua', [
            'DB' => $selectDB,
            'SOROTAN' => $selectSorotan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cari()
    {
       if(isset($_REQUEST['btnCari'])){

            $input = $_REQUEST['inputCari'];
            // $sectionCari = "CARI";
            // $input = "kopi";
            $selectSorotan = DB::table('info_orang_tua')->orderBy('id', 'ASC')->limit(5)->get();

            $resultDB = DB::table('info_orang_tua')->where('judul', 'LIKE', '%'.$input.'%')->orWhere('artikel', 'LIKE', '%'.$input.'%')->simplePaginate(5);

                return view('info_orangtua', [
                    'DB' => $resultDB,
                    'SOROTAN' => $selectSorotan,
                    'input' => $input
                ]);


                // return redirect('/orangtua')->with(['error'=>'Tidak Ditemukan']);
       }
    }

    public function view($id){

        // $testDB = DB::table('info_orang_tua')->where('id', 18)->get();

        $selectDB = DB::table('info_orang_tua')->where('id', $id)->get();
        $SOROTAN = DB::table('info_orang_tua')->orderBy('id', 'ASC')->limit(5)->get();

        return view('view_info_orangtua', [
            'selectDB' => $selectDB,
            'SOROTAN' => $SOROTAN
        ]);
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
     * @param  \App\Models\Orangtua  $orangtua
     * @return \Illuminate\Http\Response
     */
    public function show(Orangtua $orangtua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orangtua  $orangtua
     * @return \Illuminate\Http\Response
     */
    public function edit(Orangtua $orangtua)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orangtua  $orangtua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orangtua $orangtua)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orangtua  $orangtua
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orangtua $orangtua)
    {
        //
    }
}
