@extends('template.main')
@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palabras, clave">     
<title>Saldos de Presupuestos</title>
@stop
@section('title')
<h1 class="text-lowercase">Listas Saldos de Presupuestos</h1>
@stop
@section('container') 
{{ Form::open(array(
           // 'action'=>'PresupuestoController@getCreate',
            'method'=>'GET',
            'role'=>'form',
            'class'=>'form-inline'
            ))}}
            {{Form::input('submit',null,'Agregar +',array('class'=>'btn btn-primary '))}}
{{Form::close()}} 

<hr>
{{ Form::open(array(
           // 'action'=>'PresupuestoController@getIndex',
            'method'=>'GET',
            'role'=>'form',
            'class'=>'form-inline'
            ))}}

    {{Form::input('text','buscar',Input::old('buscar'),array('class'=>'form-control'))}}
    {{Form::input('submit',null,Input::old('Buscar'),array('class'=>'btn btn-primary'))}}
    <div class="bg-danger" id="_name">{{$errors->first('buscar')}}</div>

{{Form::close()}}          
<center><h1><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Lista Saldos de Presupuestos</h1></center>
<label class="label left label-info">Página {{$resultado->getCurrentPage()}} de un total de {{$resultado->getTotal()}} páginas</label>
<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>{{('Nº')}}</th>
            <th>Presupuesto</th>
            <th>Nombre Cuenta</th>
            <th>Monto</th>
            <th>Tipo Presupuesto</th>
            <th>Año</th>
            <th>Editar</th>
        <tr>      
    <thead>
    <tbody>    
        <!-- inicio mostramos todos los datos de la tabla catalogo -->
        <?php $i=0; ?>
        @foreach($resultado As $datos) <?php $i++; ?>
        <tr>  
            <td>{{$i}}</td>
            <td>{{$datos->Presupuestos->nombre}}</td>
            <td>{{$datos->Catalogos->name}}</td>
            <td>{{$datos->monto}}</td>
            <td>{{$datos->Tipopresupuestos->name}}</td>
            <td>{{$datos->year}}</td>
            <td><a class="btn btn-warning" href=""><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        @endforeach
        <!-- Fin de la tabla catalogo -->
    </tbody>
</table>
    </div>
<div class="container">
    {{$resultado->appends(array("buscar"=>Input::get("buscar")))->links()}}
</div>
@stop
