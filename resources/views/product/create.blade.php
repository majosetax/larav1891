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
          <a class="navbar-brand" href="#">Product</a>
        </div>
      </nav>
      <br>

      <div class="container-fluid">
        <form method="POST" action="{{route('store.product')}}">
            @csrf

            <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
        <label for="name">Ingrese el nombre</label>
       <br>
    </div>
    
      <div class="form-floating">
        <input type="text" name="description" class="form-control" id="description" placeholder="Descripcion">
        <label for="description">Ingrese la descripcion</label>
       <br>
    </div>

    <div class="form-floating">
        <input type="number" name="price" class="form-control" id="price" placeholder="Precio">
        <label for="price">Ingrese el precio</label>
       <br>
    </div>

    <div class="form-floating">
        <input type="number" name="cantidad" class="form-control" id="cantidad" placeholder="Cantidad">
        <label for="cantidad">Ingrese la cantidad</label>
       <br>
    </div>


    <div class="form-floating">
        <input type="date" name="date_exp" class="form-control" id="date_exp" placeholder="Fecha de expedicion">
        <label for="date_exp">Ingrese la fecha de expedicion</label>
       <br>
        <button type="submit" class="btn btn-outline-success">Guardar</button>
    </div>

    </form>
      </div>
      

      
</body>
</html>