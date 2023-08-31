@extends('layout.master')

@section('judul')
    Halaman Post
@endsection

@section('content')
    <a href="/post/create" class="btn btn-primary mb-2">Tambah</a>
    <div class="row">
            @forelse ($post as $item)
            <div class="col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('image/' . $item->thumbnail)}}" alt="Card image cap" style="width: 100%; height: 30vh;">
                <div class="card-body">
                  <h4>{{Str::limit($item->judul, 10)}}</h4>
                  <p class="card-text">{{Str::limit($item->content,20)}}</p>
                  <a href="/post/{{$item->id}}" class="btn btn-info btn-block btn-sm">Read Me</a>
                  <a href="/post/{{$item->id}}/edit" class="btn btn-warning btn-block btn-sm">Edit</a>
                  <form action="/post/{{$item->id}}" method="post" style="display:inline">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger btn-block mt-2 btn-sm" value="Delete">
                    </form>
                </div>
              </div>
        </div>
        @empty
            Tidak ada data
        @endforelse
    </div>
@endsection