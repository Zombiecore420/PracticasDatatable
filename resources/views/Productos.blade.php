@extends('index1')
<html>
    <head> </head>
        <title> Productos </title>
            <meta http-equip="Content-Type" content="text/html; charset=utf-8" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> </script>
        
            <style>
            .card{
            margin: 10px 5px 20px 55px;
                }
            nav{
                background-color: #escapeshellarg;
                }
            </style>
    </head>
        <body>
        @section('contenido')
            <nav class="nav justify-content-end">
                    @if(Session('carrito'))
                <a href="{{ url('carrito') }}" class="nav-link">
                    El carrito contenido: {{count(session('carrito'))}} Articulos
                </a>
                    @else
                <a href="#" class="nav-link">
                    El carrito contenido: 0 Articulos
                </a>
                    @endif
            </nav>
        <br><br>
        <div class="container">
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <div class="row">
                @foreach($productos as $producto)
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/'.$producto->img) }}" class="card-img-top" alt="..." height="300">
                    <div class="card-body">
                        <h5 class="card-title"><b>N°</b>{{ $producto->id }} - {{ $producto->nombre }}</h5>
                        <p class="card-text">
                            <b>Existencias:</b> {{ $producto->cantidad }} <br>
                            <b>Costo (c/u):</b> ${{ $producto->costo }}
                        </p>
                        <a href="{{ url('agregar/'.$producto->id) }}" class="btn btn-primary" role="buttom">Agregar</a>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
         </body>
</html>
@stop