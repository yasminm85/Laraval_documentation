@extends('layout.master')

@section('judul')
    Tambah Post
@endsection

@section('content')
<form action="/post" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" name="judul" placeholder="Enter judul">
    </div>
    @error('judul')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Konten</label>
      <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
    </div>
    @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label>Thumbnail</label>
       <input type="file" name="thumbnail" class="form-control">
      </div>
      @error('thumbnail')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label>Kategori</label>
       <select name="kategori_id" class="form-control" id="">
        <option value="">-- pilih kategori --</option>
        @forelse ($kategori as $item)
            <option value="{{$item->id}}">{{$item->nama}}</option>
        @empty
            <option value="">Tidak ada data</option>
        @endforelse
       </select>
      </div>
      @error('kategori_id')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection