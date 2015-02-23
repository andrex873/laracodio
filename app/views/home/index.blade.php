@extends('layout.index')
<!--
<div class="">
    <div class="alert alert-success" role="alert">...</div>
    <div class="alert alert-info" role="alert">...</div>
    <div class="alert alert-warning" role="alert">...</div>
    <div class="alert alert-danger" role="alert">...</div>
</div>
<div>
    <ul class="list-group">
      <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
      <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
      <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
      <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
    </ul>
</div>
<div class="text-center">
    <h1><i class="fa fa-home"></i> Este es index por defecto del proyecto de prueba</h1><p>by amendez</p>
</div>
-->
@section('content')
<div class="login-contente">
    <h2>Resultado de enviar correo fue: {{ $mensaje }}</h2>  
    <ul>
        <li>{{ getenv("MAIL_USER") }}</li>
        <li>{{ getenv("MAIL_PASSWORD") }}</li>
        <li>{{ getenv("MAIL_DOMAIN") }}</li>
        <li>{{ getenv("MAIL_KEY") }}</li>
    </ul>
</div>
@stop