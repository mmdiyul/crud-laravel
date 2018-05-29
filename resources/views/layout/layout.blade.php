<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      <nav>
        <a href="/users">Home</a>
        <a href="/users/create">Create a New Record</a>
      </nav>
    </header>
    <br>
    @yield('content')
    <br>
    <footer>
      <hr>
      CRUD <3 Laravel 2018.
    </footer>
  </body>
</html>
