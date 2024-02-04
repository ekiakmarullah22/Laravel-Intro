@extends('layout.master')

@section('judulAtas')
    {{$judul}}
@endsection

@section('judul')
    Data Cast
@endsection

@push('scripts')
<script>
    $(document).ready( function () {
        $('#castTable').DataTable();
    } );
</script>

<script src="https://cdn.datatables.net/v/bs4/dt-1.13.8/datatables.min.js"></script>
    
@endpush

@push('styles')
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.8/datatables.min.css" rel="stylesheet">
@endpush

@section('content')
<a href="/cast/tambah" class="btn btn-primary my-4">Tambah Data Baru</a>
<table id="kategoriTable" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>#</th>
      <th>Nama Cast</th>
      <th>Umur</th>
      <th>Biodata</th>
      <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
      @forelse ($casts as $key=>$value)
        <tr>
          <td>{{ $key+1 }}</td>
          <td>{{ $value->nama }}</td>
          <td>{{ $value->umur }}</td>
          <td>{{ $value->biodata }}</td>
          <td>
            <a href="/cast/{{ $value->id }}" class="btn btn-info">Show</a>
            <a href="/cast/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
            <form action="/cast/{{ $value->id }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger">
          </form>
          </td>
        </tr>
        @empty 
        <tr colspan="3">
          <td>No data...</td>
        </tr>
    @endforelse
    </tbody>
    <tfoot>
    <tr>
      <th>#</th>
      <th>Nama Cast</th>
      <th>Umur</th>
      <th>Biodata</th>
      <th>Aksi</th>
    </tr>
    </tfoot>
  </table>
@endsection