@extends('layout.master')

@section('judul')
    Halaman User
@endsection

@section('content')
<a href="/users/create" class="btn btn-primary mb-2">Tambah</a>
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
        @foreach ($user as $key => $value)
        <th scope="row">{{$key + 1}}</th>
        <td>{{$value->name}}</td>
        <td><a href="/users/{{$value->id}}" class="btn btn-info " style="display:inline">Detail</a>
            <a href="/users/{{$value->id}}/edit" class="btn btn-warning" style="display:inline">Edit</a>
          <form action="/users/{{$value->id}}" method="post" style="display:inline">
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