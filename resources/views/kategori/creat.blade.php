@extends('layout.master')

@section('judul')
    Halaman Tambah Kategori
@endsection

@section('content')
<form action="/kategori" method="post">
    @csrf
    <div class="form-group">
      <label>Nama Kategori</label>
      <input type="text" class="form-control" name="nama" placeholder="Enter name">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Deskripsi</label>
      <textarea name="deskripsi" class="form-control" cols="30" rows="10"></textarea>
    </div>
    @error('deskripsi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection