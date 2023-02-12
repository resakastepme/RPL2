<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Konsultasi;

class KonsultasiController extends Controller
{
    public function index()
    {
        $selectDB = DB::table('konsultasi')->orderByDesc('id')->simplePaginate(5);

        return view('konsultasi', [
            'DB' => $selectDB
        ]);
    }

    public function cari()
    {
        if (isset($_REQUEST['btnCari'])) {

            $input = $_REQUEST['inputCari'];

            $resultDB = DB::table('konsultasi')->where('gejala', 'LIKE', '%' . $input . '%')->simplePaginate(5);

            return view('konsultasi', [
                'DB' => $resultDB,
                'input' => $input
            ]);
        }
    }

    public function view($id)
    {
        // $testDB = DB::table('info_orang_tua')->where('id', 18)->get();

        $selectDB = DB::table('konsultasi')->where('id', $id)->get();

        return view('view_konsultasi', [
            'selectDB' => $selectDB,
        ]);
    }
}
