@extends('layouts.app')

 @section('content')

<div class="container">

 <h3
>Tambah Track Baru

</h3>

 <form action="{{ url('/track') }}" method="POST">
 @csrf
 <table>
 <tr>
 <td>Nama Track</td>
 <td><input type="text" name="track_name" class="form-control"></td>
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