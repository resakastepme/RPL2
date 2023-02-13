<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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

    public function show(){

        $selectDB = DB::table('info_orang_tua')->get();

        return view('admin.orangtua.index', [
            'selectDB' => $selectDB
        ]);
    }

    public function modaltambah(){

        return view('admin.orangtua.viewtambah');
    }

    public function tambah(Request $request){

        // $data = $request->all();
        // dd($data);

        // return redirect();

        $validator = Validator::make($request->all(),[
            'img' => 'required|image',
            // 'judul' => 'required|string',
            // 'sumber' => 'required|string',
            // 'artikel' => 'required|string'
        ]);

        if(!$validator->passes()){
            return response()->json(['code' => 0]);
        }else{
            $path = "images/info_orangtua";
            $file = $request->file('img');

            $upload = $file->store($path);

            if($upload){
                return response()->json(['code' => 1]);
            }
        }

    }

}
