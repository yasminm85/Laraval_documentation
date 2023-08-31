@extends('layout.master')

@section('judul')
    Halaman Edit
@endsection

@section('content')
<form action="/kategori/{{$kategori->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Nama Kategori</label>
      <input type="text" class="form-control" name="nama" value="{{$kategori->nama}}">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Deskripsi</label>
      <textarea name="deskripsi" class="form-control" cols="30" rows="10">{{$kategori->deskripsi}}</textarea>
    </div>
    @error('deskripsi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection