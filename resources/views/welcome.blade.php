@extends('index1')

<html> 
    <head> 
        <meta charset="utf-8">
        <title>Practicas en clase</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnj.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"/>
       
    </head>
    <body>
    @section('contenido')
  
        <h2 class="mb-4">Laravel 8 | DataTables </h2>
        <p style="display: flex; justify-content: flex-end"> 
        <a href="{{ url('pdfalumnos') }}" class="btn btn-warning">PDF -- Alumnos</a>
        <a href="{{ url('export') }}" class="btn btn-danger">Excel -- Alumnos</a>
        <a href="javascript:void(0)" id="createNewCustomer" class="btn btn-success">Crear nuevo alumno</a>
        <hr>
        <table class="table table-bordered yajra-datatable yajra-response">
            
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Genero</th>
                    <th>Fecha de N.</th>
                    <th>E-mail</th>
                    <th width="280px">Otros</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <br></hr>
        <h3>Excel | Formulario de importacion</h3>
                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" name="excelimport">
                    @csrf
                    <input type="file" name="file" class="form-control" riquired>
                    <button class="btn btn-success">Importar Archivo de Excel (.csv)</button>
                  </form>


    </div>

        <!--FORMULARIO : INICIO MODAL-->
        <div class="modal fade" id="ajaxModel" arial-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><h4 class="modal-title" id="modelHeading"></h4></div>
                        <div class="modal-body">

                            <img scr="" id="img_logo" alt="" style="width: 50px">
                            <form id="CustomerForm" name="CustomerForm" class="form-horizontal" enctype="multipart/form-data">
                                <input type="text" name="Customer_id" id="Customer_id">

                                <div class="form-group">
                                    <label for="matricula" class="col-sm-2 control-label">Matricula</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="matricula" id="matricula" class="form-control" placeholder="Indique su matricula" value=""
                                          maxLength="12" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nombre" class="col-sm-2 control-label"> Nombre</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder=" Indique su nombre:" value="" 
                                         maxLength="30" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="app" class="col-sm-2 control-label">Apellido</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="app" id="app" class="form-control" placeholder="indique su apellido" value="" 
                                        maxLength="30" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="fn" class="col-sm-2 control-label">FechaDeNacimiento</label>
                                    <div class="col-sm-12">
                                        <input type="date" name="fn" id="fn" class="form-control"  value="" maxLength="10" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="fn" class="col-sm-2 control-label">Genero</label>
                                    <div class="col-sm-12">
                                        <div class="form-check">
                                            <input type="radio" name='gen' id='gen' class="form-check-input" value="Femenino" checked>
                                            <label class="form-check-label" for="gen">Femenino</label>
                                        </div> 
                                        <div class="form-check">
                                            <input type="radio" name='gen' id='gen' class="form-check-input" value="Masculino" checked>
                                            <label class="form-check-label" for="gen">Masculino</label>
                                        </div> 
                                    </div> 
                                </div>
                                    <!--- IMAGEN-->
                                <div class="form-group">
                                    <label for="img" class="col-sm-2 control-label">Foto</label>
                                    <div class="col-sm-12">
                                        <input type="file" name="img1" class="form-control" required="">
                                        <input type="text" name="img2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">E-Mail</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Indica un correo valido" value="" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pass" class="col-sm-2 control-label">Contraseña</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="pass" id="pass" class="form-control"  value="" placeholder="Indica una contraseña" required="">
                                    </div>
                                </div>
                                <div class="col-sm-offse-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="saveBtn" value="create"> Guardar Cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--FORMULARIO : FIN MODAL-->
    </body>

    <!--bibliotecas-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

        <!--script java-->
        <script type="text/javascript">
            $(function(){
                $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
              });
                    var table = $('.yajra-datatable').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: "",
                            columns: [
                                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                                    { data: 'matricula', name: 'matricula' },
                                    { data: 'nombre', name: 'nombre' },
                                    { data: 'app', name: 'app' },
                                    { data: 'gen', name: 'gen' },
                                    { data: 'fn', name: 'fn' },
                                    { data: 'email', name: 'email' },
                                    { data: 'otros', name: 'otros', orderable: false, searchable: false },
                                ]
                        });

                        // -----------------NUEVO -----------------------------


                        $('#createNewCustomer').click(function(){
                        
                            $('#saveBtn').val("create-Customer");
                            $('#Customer_id').val("");
                            $('#img_logo').attr("src","");
                            $('#CustomerForm').trigger("reset");
                            $('#modelHeading').html("Crear Nuevo Registro");
                            $('#ajaxModel').modal("show");
                        });


                      // -----------------MODIFICAR -----------------------------


                        $('body').on('click', '.editCustomer', function(){
                            var id = $(this).data('id');
                            //console.log(id);
                            $.get("editar/" + id, function (data){
                                $('#modelHeading').html("Editar Customer");
                                $('#saveBtn').val("edit-user");
                                $('#ajaxModel').modal("show");
                                $('#Customer_id').val(data.id);
                                $('#matricula').val(data.matricula);
                                $('#nombre').val(data.nombre);
                                $('#app').val(data.app);
                                $('#fn').val(data.fn);
                                $('#img2').val(data.img);
                                var datimg = $('#img2').val();
                                datimg = "http://localhost/PracticasDatatable/public/img"+datimg;
                                $('#img_logo').attr("src",datimg);
                                $('#email').val(data.email);
                                $('#pass').val(data.pass);
                            });
                        });



                     // -----------------SALVAR -----------------------------
                        //$('#saveBtn').click(function(e){
                            $('form').submit(function(e){
                            e.preventDefault();
                            var formData = new FormData($(this)[0]);
                            $.ajax({
                                data: formData,
                                url: "{{ route('store') }}",
                                type: "POST",
                                contentType: false,
                                processData: false,
                                dataType: "json",
                                success: function(data){
                                    $('#CustomerForm').trigger('reset');
                                    $(this).html('Enviando...');
                                    $('#ajaxModel').modal('hide');
                                    table.draw();
                                },
                                error: function(data){
                                    console.log('Error: ', data);
                                    $('#saveBtn').html('Guardar Cambio');
                                }
                            });
                        });

                    // ----------------- ELIMINAR -----------------------------

                        $('body').on('click', '.deleteCustomer', function(){
                            var id = $(this).data("id");
                            if(confirm("Esta seguro de querer borrar el registro?")){
                                $.ajax({
                                    type: "DELETE",
                                    url: "{{ url('destroy') }}"+"/"+id,
                                    success: function(data){
                                        table.draw();
                                    },
                                    error: function(data){
                                        console.log("Error:", data);
                                    }
                                });
                            }
                            else{}
                        });
                });
        </script>
</html>
@stop