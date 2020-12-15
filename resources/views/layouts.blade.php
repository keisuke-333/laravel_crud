<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>CRUD</title>
</head>
<body>
  <header class="navbar navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="{{ url('') }}">
        CRUD
      </a>
    </div>
  </header>

  @yield('content')

</body>
</html>