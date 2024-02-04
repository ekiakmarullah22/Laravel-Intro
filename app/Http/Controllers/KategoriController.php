<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Index
        $judul = "Halaman Data Kategori";
        $kategori = DB::table('kategori')->get();
        
        //dd($kategori);
        return view('Kategori.index', ['judul' => $judul, 'kategories' => $kategori]); 
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
        $judul = "Halaman Tambah Kategori Baru";
        return view ('Kategori.tambah', ['judul' => $judul]);
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
            'deskripsi' => 'required',
        ]);
        // INSERT
        DB::table('kategori')->insert([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi')
        ]);
        // REDIRECT
        return redirect('/kategori');
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
        $judul = "Halaman Detail Kategori";
        $kategori = DB::table('kategori')->where('id', $id)->first();
        return view('Kategori.show', ['kategori' => $kategori, 'judul' => $judul]);
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
        $judul = "Halaman Edit Kategori";
        $kategori = DB::table('kategori')->where('id', $id)->first();
        return view('Kategori.edit', ['kategori' => $kategori, 'judul' => $judul]);
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
            'nama' => 'required|unique:kategori',
            'deskripsi' => 'required'
        ]);

        $query = DB::table('kategori')->where('id', $id)->update([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi')
        ]);

        return redirect('/kategori');
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
        $query = DB::table('kategori')->where('id', $id)->delete();

        return redirect('/kategori');
    }
}
