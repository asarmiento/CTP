@extends('template.main')
@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palabras, clave">     
<title>Tipos Presupuestos</title>
@stop
@section('title')
<h1 class="text-lowercase">Listas del Tipos de Presupuestos</h1>
@stop
@section('container') 
<a href="tpresupuestos/create" class="btn btn-primary">Agregar <span class="badge">+</span></a>
<hr>
{{ Form::open(array(
          //  'action'=>'TipoPresupuestoController@getIndex',
            'method'=>'GET',
            'role'=>'form',
            'class'=>'form-inline'
            ))}}

    {{Form::input('text','buscar',Input::old('buscar'),array('class'=>'form-control'))}}
    {{Form::input('submit',null,Input::old('Buscar'),array('class'=>'btn btn-primary'))}}
    <div class="bg-danger" id="_name">{{$errors->first('buscar')}}</div>

{{Form::close()}}          
<center><h1><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Lista Tipos de Presupuestos</h1></center>
<label class="label left label-info">Página {{$resultado->getCurrentPage()}} de un total de {{$resultado->getTotal()}} páginas</label>
<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>{{('Nº')}}</th>
            <th>nombre</th>
        <tr>      
    <thead>
    <tbody>    
        <!-- inicio mostramos todos los datos de la tabla catalogo -->
        
        @foreach($resultado As $datos)
        <tr>  
            <td>{{$datos->id}}</td>
            <td>{{$datos->nombre}}</td>
             <td><a class="btn btn-warning" href="{{URL::action('TipoPresupuestosController@edit',$datos->id)}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
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
