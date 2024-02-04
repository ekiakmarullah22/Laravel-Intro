@extends('layout.master')

@section('judulAtas')
    {{ $judul }}
@endsection

@section('judul')
    Tambah Kategori Baru
@endsection

@section('content')

<form action="/kategori/store" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Kategori</label>
      <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama">
      @error('nama')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror
    </div>
      <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
        @error('deskripsi')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection