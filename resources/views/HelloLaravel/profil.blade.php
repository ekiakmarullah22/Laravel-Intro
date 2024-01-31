@extends('layout.master')

@section('judul')
Selamat Datang Saudara : {{ $namaLengkap }} Dari Alamat : {{ $alamat }}
@endsection

@section('content')
<h1>Data user {{ $namaLengkap }} : </h1>
<p>Host Name : {{ $namaHost }}</p>
<p>Http Host : {{ $httpHost }}</p>
<p>Skema Http : {{ $skemaHttpHost }}</p>
<p>Ip Address : {{ $ipAddress }}</p>
<p>Jenis Kelamin : 

    @if ($jenisKelamin == 1)
        Pria
    @else
        Wanita
    @endif

</p>
@endsection
