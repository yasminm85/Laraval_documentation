@extends('layout.master')

@section('judul')
Halaman Biodata
@endsection

@section('content')
<form action="/sent" method="post">
    @csrf
<label for="name">Name</label><br>
<input type="text" name="name"><br>
<label >Jenis Kelamin</label><br>
<input type="radio" name="jk" value="1">Laki-laki
<input type="radio" name="jk" value="2">Perempuan<br>
    <input type="submit" value="kirim">
</form>
@endsection
    
    
