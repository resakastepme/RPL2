<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Konsultasi;
use Illuminate\Support\Facades\Validator;

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

    public function show(Request $request)
    {

        $selectDB = DB::table('konsultasi')->get();

        return view('admin.konsultasi.index', [
            'selectDB' => $selectDB
        ]);
    }

    public function tambah(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'img' => 'required|image',
            'judul' => 'required|String',
            'sumberpenulis' => 'required|String',
            'deskripsi' => 'required|String'
        ]);

        if (!$validator->passes()) {
            return response()->json(['code' => 0]);
        } else {
            $path = "images/konsultasi";
            $file = $request->file('img');

            $upload = $file->store($path);

            $title = $request->input('judul');
            $article = $request->input('deskripsi');
            $source = $request->input('sumberpenulis');

            $array = array(
                'gambar' => $upload,
                'judul' => $title,
                'deskripsi' => $article,
                'sumberpenulis' => $source,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            );
            $insertDB = DB::table('konsultasi')->insert($array);

            if ($upload && $insertDB) {
                return response()->json(['code' => 1]);
            }
        }
    }

    public function viewAdmin($id)
    {

        $selectDB = DB::table('konsultasi')->where('id', $id)->get();

        return view('admin.konsultasi.view', [
            "selectDB" => $selectDB
        ]);
    }

    public function editAdmin($id)
    {

        $selectDB = DB::table('konsultasi')->where('id', $id)->get();

        return view('admin.konsultasi.edit', [
            "selectDB" => $selectDB
        ]);
    }

    public function editProses(request $request, $id)
    {

        $judul = $request->input('judul');
        $sumberpenulis = $request->input('sumberpenulis');
        $artikel = $request->input('deskripsi');
        $gejala = $request->input('gejala');

        if ($request->hasFile('img')) {
            $newFile = $request->file('img');
            $hashName = $newFile->store('images/konsultasi');

            $array = array(
                'gambar' => $hashName,
                'judul' => $judul,
                'gejala' => $gejala,
                'sumberpenulis' => $sumberpenulis,
                'deskripsi' => $artikel,
                'updated_at' => Carbon::now()
            );

            $update1 = DB::table('konsultasi')->where('id', $id)->update($array);

            if ($update1) {
                return redirect('/konsultasi/admin#mulai')->with('alert', 'updated');
            } else {
                return redirect('/konsultasi/admin#mulai')->with('alert', 'gaupdated');
            }
        } else {
            $array2 = array(
                'judul' => $judul,
                'sumberpenulis' => $sumberpenulis,
                'gejala' => $gejala,
                'deskripsi' => $artikel,
                'updated_at' => Carbon::now()
            );

            $update2 = DB::table('konsultasi')->where('id', $id)->update($array2);

            if ($update2) {
                return redirect('/konsultasi/admin#mulai')->with('alert', 'updated');
            } else {
                return redirect('/konsultasi/admin#mulai')->with('alert', 'gaupdated');
            }
        }
    }

    public function hapusProses($id)
    {

        $hapus = DB::table('konsultasi')->where('id', $id)->delete();

        if ($hapus) {
            return redirect()->back()->with('alert', 'terhapus');
        } else {
            return redirect()->back()->with('alert', 'gagalhapus');
        }
    }
}
