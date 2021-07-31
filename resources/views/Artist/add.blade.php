@extends('layouts.app')

 @section('content')

<div class="container">

 <h3
>Tambah Artis Baru

</h3>

 <form action="{{ url('/artist') }}" method="POST">
 @csrf
 <table>
 <tr>
 <td>Nama Artis</td>
 <td><input type="text" name="artist_name" class="form-control"></td>
 </tr>
 <tr>
 
 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
 </tr>
 </table>
 </form>
 </div>

 @endsection