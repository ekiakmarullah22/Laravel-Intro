@extends('layout.master')

@section('judulAtas')
    {{ $judul }}
@endsection

@section('judul')
    Data Detail Cast
@endsection

@section('content')
    <h2>Show Cast {{ $cast->id }}</h2>
    <h4>Nama Cast : {{ $cast->nama }}</h4>
    <h4>Umur Cast : {{ $cast->umur }} tahun</h4>
    <p>Biodata : {{ $cast->biodata }}</p>
@endsection