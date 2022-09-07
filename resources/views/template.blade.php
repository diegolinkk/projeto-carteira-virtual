<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Carteira virtual</title>
</head>
<body>

    @auth
    <div class="row">
        <aside class="col">
            <ul>
                <li> <a href="{{route('index')}}">Inicio</a></li>
                <li> <a href="{{route('category.index')}}">Categorias</a></li>
                <li> <a href="{{route('index')}}">Carteiras</a></li>
                <li> <a href="{{route('index')}}">Transações</a></li>
            </ul>
        </aside>
    @endauth

        <div class="col-11 me-3">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>