@extends('template.main')

@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palabras, clave">     
<title>Lista Planillas</title>
@stop
@section('title')
<h1 class="text-lowercase">Listas de Planillas</h1>
@stop
@section('container') 
{{ Form::open(array(
          //  'action'=>'PlanillaController@getCreate',
            'method'=>'GET',
            'role'=>'form',
            'class'=>'form-inline'
            ))}}
            {{Form::input('submit',null,'Agregar +',array('class'=>'btn btn-primary '))}}
{{Form::close()}} 
<hr>
{{ Form::open(array(
          //  'action'=>'PlanillaController@getIndex',
            'method'=>'GET',
            'role'=>'form',
            'class'=>'form-inline'
            ))}}

    {{Form::input('text','buscar',Input::old('buscar'),array('class'=>'form-control'))}}
    {{Form::input('submit',null,Input::old('Buscar'),array('class'=>'btn btn-primary'))}}
    <div class="bg-danger" id="_name">{{$errors->first('buscar')}}</div>

{{Form::close()}}          
<center><h1><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Lista Planillas</h1></center>
<label class="label left label-info">Página {{$resultado->getCurrentPage()}} de un total de {{$resultado->getTotal()}} páginas</label>
<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>{{('Nº')}}</th>
            <th>Planilla</th>
            <th>Fecha</th>
            <th>Presupuesto</th>
            <th>Editar</th>
            <th>Excel</th>
            <th>Pdf</th>
        <tr>      
    <thead>
    <tbody>    
        <!-- inicio mostramos todos los datos de la tabla catalogo -->
        <?php $i=0; ?>
        @foreach($resultado As $datos) <?php $i++; ?>
        <tr>  
            <td>{{$i}}</td>
            <td>{{$datos->numero}}-{{$datos->year}}</td>
            <td>{{$datos->fecha}}</td>
            <td>{{$datos->Presupuestos->nombre}}</td>
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
