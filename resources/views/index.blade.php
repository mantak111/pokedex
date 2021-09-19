<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Pokedex</title>
  </head>
  <body>
    <div class="container">
      <h1>Pokedex</h1>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Weight</th>
            <th>Height</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $pokemon)
          <tr>
            <td>{{ $pokemon->id }}</td>
            <td><img src="{{ Storage::url("pokemon/{$pokemon->id}.png") }}" alt="{{ $pokemon->name }}"></td>
            <td>{{ $pokemon->name }}</td>
            <td>{{ $pokemon->weight }}</td>
            <td>{{ $pokemon->height }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
