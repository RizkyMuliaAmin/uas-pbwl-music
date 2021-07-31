@extends('layouts.app') 

@section('content') 
<div class="container">

<h3>Daftar Artis

<a href="{{ url('/artist/create') }}" class="btn btn-primary btn-sm">Tambah Artis </a>
</h3>
<table class="table table-bordered">
<tr>

 <th>NAMA</th>
 <th>EDIT</th>
 <th>DELETE</th>

</tr>
 @foreach($rows as $row)
 <tr>

 <td>{{ $row->artist_name }}</td>
 <td><a href="{{ url('artist/' . $row->artist_id . '/edit') }}"" class="btn btn-primary">Edit</a></td>
 <td><a href="{{ url('track/' . $row->track_id . '/delete') }}" class="btn btn-danger">Delete</a></td>
</tr>
 @endforeach
</table>
 </div> 
@endsection