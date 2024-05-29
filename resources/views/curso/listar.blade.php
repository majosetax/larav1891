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
          <a class="navbar-brand" href="#">Curso</a>
        </div>
      </nav>
      <br>

      <div class="container-fluid">
        <table class="table table-dark table-striped">
      
           <tr>
            <td>id</td>
            <td>nombre</td>
            <td>descripcion</td>
            <td>Ver mas...</td>
            <td>Eliminar registro</td>
           </tr>

           <tr>
            @foreach ($cursos as $curso)
            <td>{{$curso->id}}</td>
            <td>{{$curso->name}}</td>
            <td>{{$curso->description}}</td>
            <td><a href="{{route('curso.show',$curso->id)}}">Mostrar</a></td>
           <td>
            <form action="{{route('curso.destroy',$curso->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            </form>

           </td>
          
          </tr>
            <br><br>
        @endforeach
        </table>
      </div>

      
</body>
</html>