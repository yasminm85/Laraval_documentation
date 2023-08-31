@extends('layout.master')

@section('judul')
    Kategori
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
<a href="/kategori/create" class="btn btn-primary mb-2">Tambah</a>
<div class="container">
  <div class="row">
    <div class="col-12">
<table class="table" id="myTable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($kategori as $key => $value)
        <th scope="row">{{$key + 1}}</th>
        <td>{{$value->nama}}</td>
        <td><a href="/kategori/{{$value->id}}" class="btn btn-info " style="display:inline">Detail</a>
            <a href="/kategori/{{$value->id}}/edit" class="btn btn-warning" style="display:inline">Edit</a>
          <form action="/kategori/{{$value->id}}" method="post" style="display:inline">
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