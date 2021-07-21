@extends('index1')
<html>
    <head>
    <title>Productos</title>
        <meta http-equip="Content-Type" content="">
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <!-- JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Estilos -->
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
        <nav class="nav justufy-content-end">
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
          
                <table class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width: 50%">Producto</th>
                            <th style="width: 10%">Costo</th>
                            <th style="width: 8%">Cantidad</th>
                            <th style="width: 22%" class="text-center">Subtotal</th>
                            <th style="width: 10%">Otros</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0 ?>
                        @if(Session('carrito'))
                        @foreach(Session('carrito') as $id => $datos)
                        <?php $total += $datos['costo'] * $datos['cantidad'] ?>
                        <tr>
                            <td data-th="Producto">
                                <div class="col-sm-3 hidden-xs">
                                    {{ $datos['img'] }}
                                    <img src="{{ asset('img/'.$datos['img']) }}" width="100" height="100" class="img-responsive" />
                                </div>
                                <div class="col-sm-9">
                                        <h4 class="nomargin"> {{ $datos['nombre'] }}</h4>
                                </div>
                            </td>
                            <td data-th="Costo">${{ $datos['costo'] }}</td>
                            <td data-th="Cantidad">
                                    <input type="number" value="{{ $datos['cantidad'] }}" min="1" class="form-control quantity" />
                            </td>
                            <td data-th="Subtotal" class="text-center"> ${{ $datos['costo'] * $datos['cantidad'] }}</td>
                            <td data-th="Otros" class="actions">
                                <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>

                    <tfoot>
                        <tr class="visible-xs">
                            <td class="text-center"><strong>Total: {{ $total }}</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ url('productos') }}" class="btn btn-warning">
                                <i class="fa fa-angle-left"></i> Seguir Comprando
                            </a>
                            </td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td class="hidden-xs text-center"><strong>Total: ${{ $total }}</strong></td>
                        </tr>
                    </tfoot>

                </table>

        </div>

        <script type="text/javascript">
        $(".update-cart").click(function(e){
            e.preventDefault();
            var ele = $(this);
            $.ajax({
                url: '{{ url('actualizar') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.attr("date-id"),
                    cantidad: ele.parents("tr").find("quantity").val()
                },
                success: function (response){
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e){
            e.preventDefault();
            var ele = $(this);
            if(confirm("Estas seguro de borrar el producto ?? ")){
                $.ajax({
                    url: '{{ url('borrar') }}',
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("date-id")
                    },
                    success: function(responce){
                        window.location.reload();
                    }
                });
            }
        });
        </script>
    </body>
</html>
@stop