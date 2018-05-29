@extends('layout.layout')

@section('title', 'Create a New Record')

@section('content')
  <h1>Create a New Record</h1>
  <hr>
  <form action="/users" method="post">
    {{ csrf_field() }}
    <table>
      <tr>
        <td>
          Name
        </td>
        <td>
          :
        </td>
        <td>
          <input type="text" name="name" placeholder="Name" autocomplete="off">
        </td>
      </tr>
      <tr>
        <td>
          Date of Birth
        </td>
        <td>
          :
        </td>
        <td>
          <input type="date" name="birth" placeholder="Date of Birth">
        </td>
      </tr>
      <tr>
        <td>
          Address
        </td>
        <td>
          :
        </td>
        <td>
          <textarea name="address" rows="5" cols="50" placeholder="Address"></textarea>
        </td>
      </tr>
    </table>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
@endsection
