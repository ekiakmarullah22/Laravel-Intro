@extends('layout.master')

@section('judulAtas')
    {{ $judul }}
@endsection

@section('judul')
    Edit Kategori
@endsection

@section('content')
<h2>Edit Kategori {{ $kategori->id }}</h2>
<form action="/kategori/{{ $kategori->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Kategori</label>
      <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama" value="{{ $kategori->nama }}">
      @error('nama')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror
    </div>
      <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" >{{ $kategori->deskripsi }}</textarea>
        @error('deskripsi')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
    
@endsection