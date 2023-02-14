<?php

namespace App\Http\Controllers;

use App\Models\Pasangan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PasanganController extends Controller
{
    public function index()
    {
        $selectDB = DB::table('info_pasangan')->orderByDesc('id')->simplePaginate(5);
        $selectSorotan = DB::table('info_pasangan')->orderBy('id', 'ASC')->limit(5)->get();

        return view('info_pasangan', [
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
            $selectSorotan = DB::table('info_pasangan')->orderBy('id', 'ASC')->limit(5)->get();

            $resultDB = DB::table('info_pasangan')->where('judul', 'LIKE', '%' . $input . '%')->orWhere('artikel', 'LIKE', '%' . $input . '%')->simplePaginate(5);

            return view('info_pasangan', [
                'DB' => $resultDB,
                'SOROTAN' => $selectSorotan,
                'input' => $input
            ]);
        }
    }

    public function view($id){

        $selectDB = DB::table('info_pasangan')->where('id', $id)->get();
        $SOROTAN = DB::table('info_pasangan')->orderBy('id', 'ASC')->limit(5)->get();

        return view('view_info_pasangan', [
            'selectDB' => $selectDB,
            'SOROTAN' => $SOROTAN
        ]);
    }

    public function show(Request $request)
    {

        $selectDB = DB::table('info_pasangan')->get();

        return view('admin.pasangan.index', [
            'selectDB' => $selectDB
        ]);
    }

    public function modaltambah()
    {

        return view('admin.pasangan.viewtambah');
    }

    public function tambah(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'img' => 'required|image',
            'judul' => 'required|String',
            'sumberpenulis' => 'required|String',
            'artikel' => 'required|String'
        ]);

        if (!$validator->passes()) {
            return response()->json(['code' => 0]);
        } else {
            $path = "images/info_pasangan";
            $file = $request->file('img');

            $upload = $file->store($path);

            $title = $request->input('judul');
            $article = $request->input('artikel');
            $source = $request->input('sumberpenulis');

            $array = array(
                'gambar' => $upload,
                'judul' => $title,
                'artikel' => $article,
                'sumberpenulis' => $source,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            );
            $insertDB = DB::table('info_pasangan')->insert($array);

            if ($upload && $insertDB) {
                return response()->json(['code' => 1]);
            }
        }
    }

    public function viewAdmin($id){

        $selectDB = DB::table('info_pasangan')->where('id', $id)->get();

        return view('admin.pasangan.view', [
            "selectDB" => $selectDB
        ]);

    }

    public function editAdmin($id){

        $selectDB = DB::table('info_pasangan')->where('id', $id)->get();

        return view('admin.pasangan.edit', [
            "selectDB" => $selectDB
        ]);

    }

    public function editProses(request $request, $id){

        $judul = $request->input('judul');
        $sumberpenulis = $request->input('sumberpenulis');
        $artikel = $request->input('artikel');

        if($request->hasFile('img')){
            $newFile = $request->file('img');
            $hashName = $newFile->store('images/info_pasangan');

            $array = array(
                'gambar' => $hashName,
                'judul' => $judul,
                'sumberpenulis' => $sumberpenulis,
                'artikel' => $artikel,
                'updated_at' => Carbon::now()
            );

            $update1 = DB::table('info_pasangan')->where('id', $id)->update($array);

            if($update1){
                return redirect('/pasangan/admin#mulai')->with('alert', 'updated');
            }else{
                return redirect('/pasangan/admin#mulai')->with('alert', 'gaupdated');
            }

        }else{
            $array2 = array(
                'judul' => $judul,
                'sumberpenulis' => $sumberpenulis,
                'artikel' => $artikel,
                'updated_at' => Carbon::now()
            );

            $update2 = DB::table('info_pasangan')->where('id', $id)->update($array2);

            if($update2){
                return redirect('/pasangan/admin#mulai')->with('alert', 'updated');
            }else{
                return redirect('/pasangan/admin#mulai')->with('alert', 'gaupdated');
            }
        }
    }

    public function hapusProses($id){

        $hapus = DB::table('info_pasangan')->where('id', $id)->delete();

        if($hapus){
            return redirect()->back()->with('alert', 'terhapus');
        }else{
            return redirect()->back()->with('alert', 'gagalhapus');
        }

    }

}
