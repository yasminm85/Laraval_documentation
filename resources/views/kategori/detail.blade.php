@extends('layout.master')

@section('judul')
    Detail Kategori
@endsection

@section('content')
    <h3>{{$kategori->nama}}</h3>
    <p>{{$kategori->deskripsi}}</p>
    <a href="/kategori" class="btn btn-secondary">Kembali</a>
@endsection