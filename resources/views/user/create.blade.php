@extends('layout.master')
@section('judul')
    Halaman User
@endsection

@section('content')
<form action="/users" method="post">
    @csrf
    <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection