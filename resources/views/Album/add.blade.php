@extends('layouts.app')

 @section('content')

<div class="container">

 <h3
>Tambah Album Baru

</h3>

 <form action="{{ url('/album') }}" method="POST">
 @csrf
 <table>
 <tr>
 <td>Nama Album</td>
 <td><input type="text" name="album_name" class="form-control"></td>
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