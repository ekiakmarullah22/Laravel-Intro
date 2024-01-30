<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloLaravelController extends Controller
{
    //index
    public function index() {
        return view('HelloLaravel.index');
    }

    //biodata
    public function biodata() {
        return view('HelloLaravel.biodata');
    }

    //kirim
    public function kirim(Request $request) {
        //dd($request->all());
        //tangkap request dari form
        $namaLengkap = $request->input('name');
        $alamat = $request->input('address');
        $jenisKelamin = $request->input('gender');

        //data host
        $namaHost = $request->host();
        $httpHost = $request->httpHost();
        $skemaHttpHost = $request->schemeAndHttpHost();
        $ipAddress = $request->ip();

        //return view
        return view('HelloLaravel.profil', ['namaLengkap' => $namaLengkap, 'alamat' => $alamat, 'namaHost' => $namaHost, 'httpHost' => $httpHost, 'skemaHttpHost' => $skemaHttpHost, 'ipAddress' => $ipAddress, 'jenisKelamin' => $jenisKelamin]);
    }
}
