<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>TABLAS CUADRATICAS</h1>
    <form method="POST" action="{{route('resul.cdtica')}}">

        @csrf

        <label>a
        <input type="number" name="a">
    </label>
        <br> <br>
        <label>b
        <input type="number" name="b">
        </label>
        <br> <br>
        <label>c
        <input type="number" name="c">
    </label>
    <br> <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>

