@extends('layout.index')

@section('content')
<h1>Reportes en pdf</h1>
<ul>
    <li><a target="_blank" href="{{ url('snappy/reporte1/') }}">Reporte 1</a></li>
    <li><a href="#">Reporte 2</a></li>
    <li><a href="#">Reporte 3</a></li>
</ul>

@stop