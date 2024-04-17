<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO PROVEDORES</h1>

    <form method="POST" action="{{route('form.providers')}}">

        @csrf

        <label>Nombre
        <input type="text" name="name">
    </label>
        <br> <br>
        <label type="text" name="name">
        </label>
        <br> <br>
        <label>Precio
        <input type="number" name="price">
    </label>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>

