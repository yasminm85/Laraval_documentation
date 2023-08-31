@extends('layout.master')

@section('judul')
    Detail Konten Post
@endsection

@section('content')
<h3>{{$post->judul}}</h3>
<p>{{$post->content}}</p>
<img src="{{asset('image/' . $post->thumbnail)}}"  style="width: 30vh; height: 30vh;" alt=""><br>
<a href="/post" class="btn btn-secondary mt-2" >Kembali</a>
@endsection