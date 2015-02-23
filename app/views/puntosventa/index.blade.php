@extends('layout.index')


@section('content')
{{ Form::open() }}
    
<fieldset>
    <legend> Administrar pv</legend>
    <div class="row">
        <div class="col-md-3">
            <label>Empresa</label>
            {{ Form::select('empresa', array(''=>'-- seleccione --'), null,['class'=>'form-control']) }}
        </div>
        <div class="col-md-2">
            <label>Zona</label>
            {{ Form::select('zona', array(''=>'-- seleccione --'), null,['class'=>'form-control']) }}
        </div>
        <div class="col-md-3">
            <label>Punto de venta</label>
            {{ Form::select('pv', array(''=>'-- seleccione --'), null,['class'=>'form-control']) }}
        </div>
        <div class="col-md-4">
            <label>Nombre pv</label>
            {{ Form::text('npv', null, ['class'=>'form-control']) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Doc. Administrador</label>
            {{ Form::text('dad', null, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-3">
            <label>Nombre Administrador</label>
            {{ Form::text('nad', null, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-3 col-md-offset-3 text-right">
            <div class="div-br"></div>
            <button class="btn btn-success">Buscar</button>
            <a href="#" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</fieldset>
<hr>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Lista puntos de venta</h3>
    </div> 
    <div>
        <table class="table table-condensed table-striped">
            <thead>
                <tr>
                    <th>Zona</th>
                    <th>Código</th>                
                    <th>Punto de venta</th>
                    <th>Administrador</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Celular</th>
                    <th>
                        <a href="{{ url('personas.create') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Crear Punto de venta</a>
                    </th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    </div>
</div> 

    
{{ Form::close() }}

@stop