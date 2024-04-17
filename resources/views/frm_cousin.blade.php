<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>PRIMOS</h1>
    <form method="POST" action="{{route('cousin.store')}}">
    @csrf

    <label>num1
    <input type="number" name="num1">
    </label>
    <button type="submit">Guardar</button>

    </form>


</body>
</html>
