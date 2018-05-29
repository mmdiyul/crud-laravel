@extends('layout.layout')

@section('title', 'Home')

@section('content')
  <h1>Home</h1>
  <hr>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Date of Birth</th>
      <th>Address</th>
      <th>Show</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @php
      $i = 0;
    @endphp
    @foreach ($users as $user)
      <tr>
        <td>
          @php
            echo ++$i;
          @endphp
        </td>
        <td>
          {{$user -> name}}
        </td>
        <td>
          {{$user -> birth}}
        </td>
        <td>
          {{$user -> address}}
        </td>
        <td>
          <form action="users/{{$user -> id}}">
            <button>Show</button>
          </form>
        </td>
        <td>
          <form action="users/{{$user -> id}}/edit">
						<button>Edit</button>
          </form>
        </td>
        <td>
					<form action="users/{{$user -> id}}" method="post">
						<input type="submit" name="submit" value="Delete">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
					</form>
        </td>
      </tr>
    @endforeach
  </table>
@endsection
