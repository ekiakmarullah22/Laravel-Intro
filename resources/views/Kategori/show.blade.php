@extends('layout.master')

@section('judulAtas')
    {{ $judul }}
@endsection

@section('judul')
    Data Detail Kategori
@endsection

@section('content')
    <h2>Show Kategori {{ $kategori->id }}</h2>
    <h4>Nama Kategori : {{ $kategori->nama }}</h4>
    <p>Deskripsi : {{ $kategori->deskripsi }}</p>
@endsection