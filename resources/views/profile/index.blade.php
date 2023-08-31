@extends('layout.master')

@section('judul')
    Halaman Profile
@endsection

@section('content')
<a href="/profile/create" class="btn btn-primary mb-2">Tambah</a>
<div class="container">
  <div class="row">
    <div class="col-12">
<table class="table" id="myTable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($profile as $key => $value)
        <th scope="row">{{$key + 1}}</th>
        <td>{{$value->name}}</td>
        <td>{{$value->umur}}</td>
        <td><a href="/profile/{{$value->id}}" class="btn btn-info " style="display:inline">Detail</a>
            <a href="/profile/{{$value->id}}/edit" class="btn btn-warning" style="display:inline">Edit</a>
          <form action="/profile/{{$value->id}}" method="post" style="display:inline">
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