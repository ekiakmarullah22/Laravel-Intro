<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Index
        $judul = "Halaman Data Cast";
        $cast = DB::table('cast')->get();
        
        //dd($kategori);
        return view('Cast.index', ['judul' => $judul, 'casts' => $cast]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //tampilkan form tambah data
        //parsing data
        $judul = "Halaman Tambah Cast Baru";
        return view ('Cast.tambah', ['judul' => $judul]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'biodata' => 'required'
        ]);
        // INSERT
        DB::table('cast')->insert([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'biodata' => $request->input('biodata')
        ]);
        // REDIRECT
        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //TAMPILKAN DATA BERDASARKAN ID
        $judul = "Halaman Detail Cast";
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('Cast.show', ['cast' => $cast, 'judul' => $judul]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //EDIT KATEGORI
        $judul = "Halaman Edit Cast";
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('Cast.edit', ['cast' => $cast, 'judul' => $judul]);
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
        //UPDATE DATA
        //VALIDATE
        $request->validate([
            'nama' => 'required|unique:cast',
            'umur' => 'required',
            'biodata' => 'required'
        ]);

        $query = DB::table('cast')->where('id', $id)->update([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'biodata' => $request->input('biodata')
        ]);

        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //HAPUS DATA
        $query = DB::table('cast')->where('id', $id)->delete();

        return redirect('/cast');
    }
}
