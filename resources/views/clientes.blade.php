<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body id="body_clientes">
    <h1 class="title_cliente">Clientes Registrados</h1>
    <section class="clientes">
        <div class="container">
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
                    <th scope="col">Creado</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $item)
                    <tr>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->apellido}}</td>
                        <td>{{$item->cedula}}</td>
                        <td>{{$item->departamento}}</td>
                        <td>{{$item->ciudad}}</td>
                        <td>{{$item->celular}}</td>
                        <td>{{$item->correo}}</td>
                        <td>{{$item->created_at}}</td>
                    </tr> 
                    @endforeach
                </tbody>
              </table>
        </div>
    </section>
    <div class="boton">
        <a href="/"><button class="btn btn-primary">Atrás</button></a>
        <a href="{{ route('ganador') }}"><button class="btn btn-warning">Sorteo</button></a>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>