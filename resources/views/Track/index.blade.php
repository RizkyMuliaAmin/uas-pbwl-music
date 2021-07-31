@extends('layouts.app') 

@section('content') 
<div class="container">

<h3>Daftar Track
<a href="{{ url('/track/create') }}" class="btn btn-primary btn-sm">Tambah Track </a>
</h3>
<table class="table table-bordered">
<tr>

 <th>Genre</th>
 <th>Artist</th>
 <th>Album</th>
 <th>EDIT</th>
 <th>DELETE</th>
</tr>
 @foreach($rows as $row)
 <tr>

 <td>{{ $row->track_name }}</td>
 <td>{{ $row->artist_id }}</td>
 <td>{{ $row->album_id }}</td>
 <td><a href="{{ url('track/' . $row->track_id . '/edit') }}" class="btn btn-primary">Edit</a></td>
 <td><a href="{{ url('track/' . $row->track_id . '/delete') }}" class="btn btn-danger">Delete</a></td>

 



</tr>
 @endforeach
</table>
 </div> 
@endsection