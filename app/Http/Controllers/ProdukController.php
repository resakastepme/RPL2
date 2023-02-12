<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $selectDB = DB::table('produk')->orderByDesc('id')->simplePaginate(5);

        return view('produk', [
            'DB' => $selectDB
        ]);
    }

    public function cari()
    {
        if (isset($_REQUEST['btnCari'])) {

            $input = $_REQUEST['inputCari'];

            $resultDB = DB::table('produk')->where('judul', 'LIKE', '%' . $input . '%')->orWhere('deskripsi', 'LIKE', '%' . $input . '%')->simplePaginate(5);

            return view('produk', [
                'DB' => $resultDB,
                'input' => $input
            ]);
        }
    }

    public function view($id)
    {
        // $testDB = DB::table('info_orang_tua')->where('id', 18)->get();

        $selectDB = DB::table('produk')->where('id', $id)->get();

        return view('view_produk', [
            'selectDB' => $selectDB,
        ]);
    }
}
