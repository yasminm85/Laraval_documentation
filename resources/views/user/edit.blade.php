@extends('layout.master')
@section('judul')
    Halaman Edit User
@endsection

@section('content')
<form action="/users/{{$user->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" name="name" value="{{$user->name}}">
    </div>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="email" value="{{$user->email}}">
    </div>
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter new password">
    </div>
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection