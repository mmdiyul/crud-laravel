@extends('layout.layout')

@section('title', 'Show Data')

@section('content')
  <h1>Show</h1>
  <hr>
  <table>
    <tr>
      <td>ID</td>
      <td>:</td>
      <td>{{$user -> id}}</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>:</td>
      <td>{{$user -> name}}</td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td>:</td>
      <td>{{$user -> birth}}</td>
    </tr>
    <tr>
      <td>Address</td>
      <td>:</td>
      <td>{{$user -> address}}</td>
    </tr>
  </table>
  <form action="{{$user -> id}}/edit">
    <button>Edit</button>
  </form>
@endsection
