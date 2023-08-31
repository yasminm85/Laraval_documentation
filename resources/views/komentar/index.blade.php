@extends('layout.master')

@section('judul')
    Halaman Komentar
@endsection

@push('scripts')
    <script>    
        $(document).ready(function(){
            $('#myTable ').DataTable();
        });
    </script>
   <script src="https://cdn.datatables.net/v/bs4/dt-1.13.5/datatables.min.js"></script>
@endpush

@push('styles')
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.5/datatables.min.css" rel="stylesheet"/>
@endpush

@section('content')

<a href="/komentar/create" class="btn btn-primary mb-2">Tambah</a>
<div class="container">
  <div class="row">
    <div class="col-12">
<table class="table" id="myTable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Content</th>
        <th scope="col">User</th>
        <th scope="col">Kategori</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($komentar as $key => $value)
        <th scope="row">{{$key + 1}}</th>
        <td>{{$komentar->content}}</td>
        <td><a href="/komentar/{{$value->id}}" class="btn btn-info " style="display:inline">Detail</a>
            <a href="/komentar/{{$value->id}}/edit" class="btn btn-warning" style="display:inline">Edit</a>
          <form action="/komentar/{{$value->id}}" method="post" style="display:inline">
          @csrf
          @method('delete')
          <input type="submit" class="btn btn-danger btn-sm" value="Delete">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    </div>
  </div>
</div>
    
@endsection