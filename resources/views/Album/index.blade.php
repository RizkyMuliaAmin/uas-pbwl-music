@extends('layouts.app') 

@section('content') 
<div class="container">

<h3>Daftar Album

<a href="{{ url('/album/create') }}" class="btn btn-primary btn-sm">Tambah Album </a>
</h3>
<table class="table table-bordered">
<tr>

 <th>Nama Album</th>
 <th>Artist</th>
 <th>EDIT</th>
 <th>DELETE</th>

</tr>
 @foreach($rows as $row)
 <tr>

 <td>{{ $row->album_name }}</td>
 <td>{{ $row->artist_id }}</td>
 <td><a href="{{ url('album/' . $row->album_id . '/edit') }}"" class="btn btn-primary">Edit</a></td>
 <td><a href="{{ url('track/' . $row->track_id . '/delete') }}" class="btn btn-danger">Delete</a></td>
</tr>
 @endforeach
</table>
 </div> 
@endsection