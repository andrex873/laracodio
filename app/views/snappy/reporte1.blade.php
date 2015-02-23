@extends('layout.index')

@section('content')
<h1>Reporte de pepe</h1>

<object data="{{ asset('file.pdf') }}" 
        type="application/pdf" 
        width="100%" 
        height="600" 
        title="Adobe Reader"></object>
@stop