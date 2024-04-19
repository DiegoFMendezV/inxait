<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body id="body_ganador">
    <section class="ganador">
        <div class="container">
            <h1 class="title_ganador">El Ganador es:</h1>
            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Correo</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$ganador->nombre}}</td>
                        <td>{{$ganador->apellido}}</td>
                        <td>{{$ganador->cedula}}</td>
                        <td>{{$ganador->departamento}}</td>
                        <td>{{$ganador->ciudad}}</td>
                        <td>{{$ganador->celular}}</td>
                        <td>{{$ganador->correo}}</td>
                    </tr> 
                </tbody>
            </table>    
              <a class="btn btn-primary"href="/clientes">Atrás</a>
              <a href="{{ route('ganador') }}"><button class="btn btn-warning">Nuevo Sorteo</button></a>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>