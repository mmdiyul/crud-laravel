@extends('layout.layout')

@section('title', 'Edit Record')

@section('content')
  <h1>Edit Record</h1>
  <hr>
  <form action="/users/{{$user -> id}}" method="post">
    <table>
      <tr>
        <td>Name</td>
        <td>:</td>
        <td><input type="text" name="name" value="{{$user -> name}}"></td>
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td>:</td>
        <td><input type="date" name="birth" value="{{$user -> birth}}"></td>
      </tr>
      <tr>
        <td>Address</td>
        <td>:</td>
        <td><textarea name="address" rows="5" cols="50">{{$user -> address}}</textarea></td>
      </tr>
    </table>
    <input type="submit" name="submit" value="Edit">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
  </form>
@endsection
