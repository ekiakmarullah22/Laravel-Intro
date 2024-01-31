@extends('layout.master')

@section('judul')
Halaman Biodata
@endsection

@section('content')
<form action="/kirim" method="POST">
    @csrf
    <label>Nama Lengkap :</label>
    <input type="text" name="name"><br/>
    <label>Alamat :</label>
    <textarea name="address" id="" cols="30" rows="10"></textarea><br/>
    <label>Jenis Kelamin</label>
    <input type="radio" name="gender" value="1">Pria
    <input type="radio" name="gender" value="2">wanita
    <br/>
    <input type="submit" value="Kirim">
</form>
@endsection