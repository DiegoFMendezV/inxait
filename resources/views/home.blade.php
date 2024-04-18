<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inxait</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img class="logo" src="{{asset('images/logo.png')}}" alt=""></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <p class="title">AUTOFUNZA</p>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
            <div class="boton">
                <a href="/clientes"><button class="btn btn-primary mb-4">Clientes Registrados</button></a>
            </div>
        </div>
    </nav>
    <section class="inicio">
        <div class="banner_inicio">
            <strong class="auto">¡ Gánese este hermoso auto !</strong>
            <strong class="aniversario">ESTAMOS DE ANIVERSARIO Y <br> LO SORTEAREMOS</strong>
            <p class="text">Regístrate en el siguiente formulario hasta el 31 de Mayo del 2024 <br> y participarás en el sorteo de un kia picanto 0km.</p>
            <img class="banner" src="{{asset('images/banner.jpg')}}" alt="">

        </div>
    </section>
    
    <section class="formulario">
        <div class="container formu">
            <h1 class="formu_title">FORMULARIO DE REGISTRO</h1>
            <form action="{{route('clientes_create')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="label" for="nombre">Nombres</label>
                    @error('nombre')
                        <br>
                       <span>*{{ $message }}</span>
                       <br>
                    @enderror
                    <input type="text" value="{{old('nombre')}}" class="form-control mb-3" name="nombre" id="nombre">
                </div>
                <div class="form-group">
                    <label class="label" for="apellido">Apellidos</label>
                    @error('apellido')
                        <br>
                       <span>*{{ $message }}</span>
                       <br>
                    @enderror
                    <input type="text" value="{{old('apellido')}}" class="form-control mb-3" name="apellido" id="apellido">
                </div>
                <div class="form-group">
                    <label class="label" for="cedula">Cédula</label>
                    @error('cedula')
                        <br>
                       <span>*{{ $message }}</span>
                       <br>
                    @enderror
                    <input type="number" value="{{old('cedula') }}"class="form-control mb-3" name="cedula" id="cedula">
                </div>
                <div class="form-group">
                    <label class="label" for="departamento">Departamento</label>
                    @error('departamento')
                        <br>
                       <span>*{{ $message }}</span>
                       <br>
                    @enderror
                    <input type="text" value="{{old('departamento')}}" class="form-control mb-3" name="departamento" id="departamento">
                </div>
                <div class="form-group">
                    <label class="label" for="ciudad">Ciudad</label>
                    @error('ciudad')
                        <br>
                       <span>*{{ $message }}</span>
                       <br>
                    @enderror
                    <input type="text" value="{{old('ciudad')}}" class="form-control mb-3" name="ciudad" id="ciudad">
                </div>
                {{-- <select name="departamento_id" id="">
                    @foreach ($departamentos as $departamento)
                        <option name="departamento" value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                    @endforeach
                </select> --}}
                {{-- <select name="" id="">
                    <option name="ciudad" value="">Selecciona una Ciudad</option>
                </select> --}}
                <div class="form-group">
                    <label class="label" for="celular">Celular</label>
                    @error('celular')
                        <br>
                       <span>*{{ $message }}</span>
                       <br>
                    @enderror
                    <input type="number" value="{{old('celular')}}" class="form-control mb-3" name="celular" id="celular">
                </div>
                <div class="form-group">
                    <label class="label" for="correo">Correo Electrónico</label>
                    @error('correo')
                        <br>
                       <span>*{{ $message }}</span>
                       <br>
                    @enderror
                    <input type="email" value="{{old('correo')}}" class="form-control mb-3" name="correo" id="correo" aria-describedby="emailHelp">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="habeas" id="habeas">
                    <label class="form-check-label mb-3" for="habeas"><small>Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales.</small></label>
                </div>
                <div class="boton">
                    <button type="submit" class="btn btn-danger">Enviar</button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>