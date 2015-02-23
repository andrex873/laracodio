<!DOCTYPE html>
<htm lang="es">
    <head>
        <title>Main ATH S.A.</title>
        <meta charset="utf-8"/>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.2/lumen/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <header class="container-fluid">
            <div class="row">
                
            
            <div class="col-xs-1">
                <figure class="logo"></figure>
            </div>
            <div class="col-xs-7 nombre">
                <h1 class="titulo">ATH a toda hora S.A.</h1>
            </div>
            <div class="col-xs-4">
                <div class="row">
                    <div class="col-xs-3">
                        <figure class="avatar"></figure>
                    </div>
                    <div class="col-xs-9">
                        <a href="#" class="avatar-nombre btn btn-default">Juan Camilo Lopez Pastrana <i class="fa fa-caret-down"></i></a>
                    </div>
                </div>
            </div>
                </div>
        </header>
        <div class="contenido">
            @yield('content')
        </div>
        
        <footer>
        
        </footer>
        
       {{--
        <div class="div-br"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
        --}}
        
        
        {{-- Archivos JS al final de la carga de la pagina --}}
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</htm>