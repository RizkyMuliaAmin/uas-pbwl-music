@extends('layouts.app') 

@section('content') 
<div class="container">

<h3>Daftar Played

<a href="{{ url('/played/create') }}" class="btn btn-primary btn-sm">Tambah Played </a>
</h3>
<table class="table table-bordered">
<tr>

 
 <th>Artist</th>
 <th>Album</th>
 <th>Track</th>
 <th>EDIT</th>
 <th>DELETE</th>

</tr>
 @foreach($rows as $row)
 <tr>

 <td>{{ $row->artist_id }}</td>
 <td>{{ $row->album_id }}</td>
 <td>{{ $row->track_id }}</td>
 <td><a href="{{ url('played/' . $row->played_id . '/edit') }}"" class="btn btn-primary">Edit</a></td>
 <td><a href="{{ url('track/' . $row->track_id . '/delete') }}" class="btn btn-danger">Delete</a></td>

</tr>
 @endforeach
</table>
 </div> 
@endsection