<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Amigos</a>
        </div>
      </nav>
      <br>

      <div class="container-fluid">
        <form method="POST" action="{{route('friend.store')}}">
            @csrf

            <div class="form-floating">
                <input type="number" name="num1" class="form-control" id="num1" placeholder="Numero 1">
                <label for="num1">Ingrese el numero 1:</label>
            </div>

      <div class="form-floating">
        <input type="number" name="num2" class="form-control" id="num2" placeholder="Numero 2">
        <label for="num2">Ingrese el numero 2:</label>
       <br>
        <button type="submit" class="btn btn-outline-success">Guardar</button>
    </div>
    </form>
      </div>
      

      
</body>
</html>