@extends('layouts.app')

 @section('content')

<div class="container">

 <h3
>Tambah Played Baru

</h3>

 <form action="{{ url('/played') }}" method="POST">
 @csrf
 <table>
 <tr>
 <td>Nama Played</td>
 <td><input type="text" name="played_name" class="form-control"></td>
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