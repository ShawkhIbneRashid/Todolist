<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class = "container">
      @include('inc.messages')
      @yield('content')
    </div>

    <footer id = "footer" class = "text-center">
      <p>Copyright &copy; 2017 TodoList</p>
    </footer>
  </body>
</html>
