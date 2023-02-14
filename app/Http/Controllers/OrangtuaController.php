<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

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
        if (isset($_REQUEST['btnCari'])) {

            $input = $_REQUEST['inputCari'];
            // $sectionCari = "CARI";
            // $input = "kopi";
            $selectSorotan = DB::table('info_orang_tua')->orderBy('id', 'ASC')->limit(5)->get();

            $resultDB = DB::table('info_orang_tua')->where('judul', 'LIKE', '%' . $input . '%')->orWhere('artikel', 'LIKE', '%' . $input . '%')->simplePaginate(5);

            return view('info_orangtua', [
                'DB' => $resultDB,
                'SOROTAN' => $selectSorotan,
                'input' => $input
            ]);


            // return redirect('/orangtua')->with(['error'=>'Tidak Ditemukan']);
        }
    }

    public function view($id)
    {

        // $testDB = DB::table('info_orang_tua')->where('id', 18)->get();

        $selectDB = DB::table('info_orang_tua')->where('id', $id)->get();
        $SOROTAN = DB::table('info_orang_tua')->orderBy('id', 'ASC')->limit(5)->get();

        return view('view_info_orangtua', [
            'selectDB' => $selectDB,
            'SOROTAN' => $SOROTAN
        ]);
    }

    public function show(Request $request)
    {

        $selectDB = DB::table('info_orang_tua')->get();

        return view('admin.orangtua.index', [
            'selectDB' => $selectDB
        ]);
    }

    public function modaltambah()
    {

        return view('admin.orangtua.viewtambah');
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
            $path = "images/info_orangtua";
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
            $insertDB = DB::table('info_orang_tua')->insert($array);

            if ($upload && $insertDB) {
                return response()->json(['code' => 1]);
            }
        }
    }

    public function viewAdmin($id){

        $selectDB = DB::table('info_orang_tua')->where('id', $id)->get();

        // return view('admin.orangtua.viewView', [
        //     'selectDB' => $selectDB
        // ]);

        return view('admin.orangtua.view', [
            "selectDB" => $selectDB
        ]);

    }

    public function editAdmin($id){

        $selectDB = DB::table('info_orang_tua')->where('id', $id)->get();

        return view('admin.orangtua.edit', [
            "selectDB" => $selectDB
        ]);

    }

    public function editProses(request $request, $id){

        $judul = $request->input('judul');
        $sumberpenulis = $request->input('sumberpenulis');
        $artikel = $request->input('artikel');

        if($request->hasFile('img')){
            $newFile = $request->file('img');
            $hashName = $newFile->store('images/info_orangtua');

            $array = array(
                'gambar' => $hashName,
                'judul' => $judul,
                'sumberpenulis' => $sumberpenulis,
                'artikel' => $artikel,
                'updated_at' => Carbon::now()
            );

            $update1 = DB::table('info_orang_tua')->where('id', $id)->update($array);

            if($update1){
                return redirect('/orangtua/admin#mulai')->with('alert', 'updated');
            }else{
                return redirect('/orangtua/admin#mulai')->with('alert', 'gaupdated');
            }

        }else{
            $array2 = array(
                'judul' => $judul,
                'sumberpenulis' => $sumberpenulis,
                'artikel' => $artikel,
                'updated_at' => Carbon::now()
            );

            $update2 = DB::table('info_orang_tua')->where('id', $id)->update($array2);

            if($update2){
                return redirect('/orangtua/admin#mulai')->with('alert', 'updated');
            }else{
                return redirect('/orangtua/admin#mulai')->with('alert', 'gaupdated');
            }
        }
    }

    public function hapusProses($id){

        $hapus = DB::table('info_orang_tua')->where('id', $id)->delete();

        if($hapus){
            return redirect()->back()->with('alert', 'terhapus');
        }else{
            return redirect()->back()->with('alert', 'gagalhapus');
        }

    }

}
