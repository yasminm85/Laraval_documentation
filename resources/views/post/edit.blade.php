@extends('layout.master')

@section('judul')
    Edit Post
@endsection

@section('content')
<form action="/post/{{$post->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" name="judul" placeholder="Enter judul" value="{{$post->judul}}">
    </div>
    @error('judul')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Konten</label>
      <textarea name="content" class="form-control" cols="30" rows="10">{{$post->content}}</textarea>
    </div>
    @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label id="thumbnail-label" >Thumbnail</label><br>
       <input type="file" name="thumbnail" id="thumbnail" class="form-control mt-2">
      </div>
      @error('thumbnail')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label>Kategori</label>
       <select name="kategori_id" class="form-control" id="">
        <option value="">-- pilih kategori --</option>
        @forelse ($kategori as $item)
        @if ($item->id == $post->kategori_id)
        <option value="{{$item->id}}" selected>{{$item->nama}}</option>
        @else
        <option value="{{$item->id}}">{{$item->nama}}</option>
        @endif
            
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