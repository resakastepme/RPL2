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
        $selectDB = DB::table('info_orang_tua')->get();

        return view('info_orangtua', [
            'DB' => $selectDB
        ]);
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
