<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Producto</a>
        </div>
      </nav>

      <div class="container-fluid">
        <table class="table table-dark table-striped">
      
           <tr>
            <td>nombre</td>
            <td>descripcion</td>
           </tr>

           <tr>
            @foreach ($productos as $producto)
            <td>{{$producto->name}}</td>
            <td>{{$producto->description}}</td>
           </tr>
            <br><br>
        @endforeach
        </table>
      </div>
      

      
</body>
</html>