@extends('layout.master')

@section('judul')
    Tambah Profile
@endsection

@section('content')
<form action="/profile" method="post">
    @csrf
    <div class="form-group">
      <label>Umur</label>
      <input type="number" class="form-control" name="umur" placeholder="Enter umur">
    </div>
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Bio</label>
      <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
    </div>
    @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label>Address</label>
        <textarea name="address" class="form-control" cols="30" rows="10"></textarea>
      </div>
      @error('address')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label>User</label>
       <select name="users_id" class="form-control" id="">
        <option value="">-- pilih user --</option>
        @forelse ($user as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @empty
            <option value="">Tidak ada data</option>
        @endforelse
       </select>
      </div>
      @error('users_id')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection