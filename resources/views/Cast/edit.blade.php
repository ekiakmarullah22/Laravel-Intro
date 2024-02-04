@extends('layout.master')

@section('judulAtas')
    {{ $judul }}
@endsection

@section('judul')
    Edit Cast
@endsection

@section('content')
<h2>Edit Cast {{ $cast->id }}</h2>
<form action="/cast/{{ $cast->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Cast</label>
      <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama" value="{{ $cast->nama }}">
      @error('nama')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="umur" class="form-label">Umur</label>
        <input type="number" class="form-control" id="umur" aria-describedby="umur" name="umur" value="{{ $cast->umur }}">
        @error('umur')
              <div class="alert alert-danger my-2">{{ $message }}</div>
          @enderror
      </div>
      <div class="mb-3">
        <label for="biodata" class="form-label">Biodata</label>
        <textarea class="form-control" id="biodata" rows="3" name="biodata">{{ $cast->biodata }}</textarea>
        @error('biodata')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection