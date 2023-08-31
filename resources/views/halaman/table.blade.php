@extends('layout.master')

@section('judul')
    Data Table
@endsection

@push('scripts')
    <script>    
        $(document).ready(function(){
            $('#myTable ').DataTable();
        });
    </script>
   <script src="https://cdn.datatables.net/v/bs4/dt-1.13.5/datatables.min.js"></script>
@endpush

@push('styles')
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.5/datatables.min.css" rel="stylesheet"/>
@endpush

@section('content')
<table class="table" id="myTable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
@endsection