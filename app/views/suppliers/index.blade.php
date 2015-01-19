@extends('template.main')
@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palabras, clave">     
<title>Proveedores</title>
@stop
@section('title')
<h1 class="text-lowercase">Listas de Proveedores</h1>
@stop
@section('container') 
<button onclick="location=''"  class="btn btn-primary" type="button">
  Agregar <span class="badge">+</span>
</button>

<hr>
{{ Form::open(array(
            //'action'=>'ProveedorController@getIndex',
            'method'=>'GET',
            'role'=>'form',
            'class'=>'form-inline'
            ))}}

    {{Form::input('text','buscar',Input::old('buscar'),array('class'=>'form-control'))}}
    {{Form::input('submit',null,Input::old('Buscar'),array('class'=>'btn btn-primary'))}}
    <div class="bg-danger" id="_name">{{$errors->first('buscar')}}</div>

{{Form::close()}}          
<center><h1><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Lista de Proveedores</h1></center>
<label class="label left label-info">Página {{$resultado->getCurrentPage()}} de un total de {{$resultado->getTotal()}} páginas</label>
<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>{{('Nº')}}</th>
            <th>{{('Cédula')}}</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo Electronico</th>
            <th>Editar</th>
        <tr>      
    <thead>
    <tbody>    
        <!-- inicio mostramos todos los datos de la tabla catalogo -->
        
        @foreach($resultado As $datos)
        <tr>  
            <td></td>
            <td>{{$datos->cedula}}</td>
            <td>{{($datos->nombre)}}</td>
            <td>{{$datos->telefono}}</td>
            <td>{{$datos->email}}</td>
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
