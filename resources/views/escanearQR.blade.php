@extends('index1')
<html>
    <head>
        <meta charset="utf-8">
        <title> Laravel 8 | Escaner QR </title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    </head>
    <body>
    @section('contenido')
        <h1>Escanea un Código QR valido</h1>
        <video id="preview"></video>
        <script type="text/javascript">
        
        let scanner = new Instascan.Scanner({video: document.getElementById('preview')});
        scanner.addListener('scan', function(content){
            console.log(content);
            alert(content);
        });

        Instascan.Camera.getCameras().then(function(cameras){
            if(cameras.length > 0){ scanner.start(cameras[0]); }
            else{console.error('No funcionan las camaras'); }
        }).catch(function(e){
            console.error(e);
        });
    </script>
    </body>
</html>
@stop