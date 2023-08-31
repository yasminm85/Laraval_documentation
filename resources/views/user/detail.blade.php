@extends('layout.master')

@section('judul')
    Detail User
@endsection

@section('content')
    <h3>{{$user->name}}</h3>
    <p>{{$user->email}}</p>
    <p>{{$user->password}}</p>
    <a href="/users" class="btn btn-secondary">Kembali</a>
@endsection