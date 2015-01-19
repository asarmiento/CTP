@extends('layouts.main')
@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palabras, clave">     
<title>Presupuestos</title>
@stop
@section('title')
<h1 class="text-lowercase">Listas de Presupuestos</h1>
@stop
@section('container') 
<a href="presupuestos/create" class="btn btn-primary">Agregar <span class="badge">+</span></a>
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
<center><h1><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Lista Presupuestos</h1></center>
<label class="label left label-info">Página {{$resultado->getCurrentPage()}} de un total de {{$resultado->getTotal()}} páginas</label>
<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>{{('Nº')}}</th>
            <th>nombre</th>
            <th>Fuente Financiamiento</th>
            <th>Descripcion</th>
            <th>{{('Año')}}</th>
            <th>Tipo</th>
            <th>Global</th>
            <th>Editar</th>
            <th>Excel</th>
            <th>PDF</th>
        <tr>      
    <thead>
    <tbody>    
        <!-- inicio mostramos todos los datos de la tabla catalogo -->
        <?php $i=0; ?>
        @foreach($resultado As $datos) <?php $i++; ?>
        <tr>  
            <td>{{$i}}</td>
            <td>{{$datos->nombre}}</td>
            <td>{{($datos->fuente)}}</td>
            <td>{{$datos->descripcion}}</td>
            <td>{{$datos->year}}</td>
            @if($datos->tipo==0)
            <td>Ordinario</td>
            @else
            <td>Extraordinario</td>
            @endif
            <td>{{$datos->global}}</td>
             <td><a class="btn btn-warning" href=""><span class="glyphicon glyphicon-pencil"></span></a></td>
               <td><a class="btn btn-success" href=""><span class="glyphicon glyphicon-download-alt"></span></a></td>
               <td><a class="btn btn-danger" target="_black" href=""><span class="glyphicon glyphicon-download-alt"></span></a></td>
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
