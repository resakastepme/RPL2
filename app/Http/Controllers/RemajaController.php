<?php

namespace App\Http\Controllers;

use App\Models\Remaja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RemajaController extends Controller
{
    public function index()
    {

        $selectDB = DB::table('info_remaja')->orderByDesc('id')->simplePaginate(5);
        $selectSorotan = DB::table('info_remaja')->orderBy('id', 'ASC')->limit(5)->get();

        return view('info_remaja', [
            'DB' => $selectDB,
            'SOROTAN' => $selectSorotan
        ]);
    }

    public function cari()
    {
        if (isset($_REQUEST['btnCari'])) {

            $input = $_REQUEST['inputCari'];
            // $sectionCari = "CARI";
            // $input = "kopi";
            $selectSorotan = DB::table('info_remaja')->orderBy('id', 'ASC')->limit(5)->get();

            $resultDB = DB::table('info_remaja')->where('judul', 'LIKE', '%' . $input . '%')->orWhere('artikel', 'LIKE', '%' . $input . '%')->simplePaginate(5);

            return view('info_remaja', [
                'DB' => $resultDB,
                'SOROTAN' => $selectSorotan,
                'input' => $input
            ]);
        }
    }

    public function view($id){

        // $testDB = DB::table('info_orang_tua')->where('id', 18)->get();

        $selectDB = DB::table('info_remaja')->where('id', $id)->get();
        $SOROTAN = DB::table('info_remaja')->orderBy('id', 'ASC')->limit(5)->get();

        return view('view_info_remaja', [
            'selectDB' => $selectDB,
            'SOROTAN' => $SOROTAN
        ]);

    }

}
