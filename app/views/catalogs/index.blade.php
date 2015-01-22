@extends('template.main')
@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palabras, clave">     
<title>Lista Cuentas</title>
@stop
@section('title')
Listas del Catalogo de Cuentas
@stop
@section('container') 

<a href="catalogs/create" class="btn btn-primary">Agregar <span class="badge">+</span></a>
<hr>

{{ Form::open(array(
            //'action'=>'CatalogoController@getIndex',
            'method'=>'GET',
            'role'=>'form',
            'class'=>'form-inline'
            ))}}

    {{Form::input('text','buscar',Input::old('buscar'),array('class'=>'form-control'))}}
    {{Form::input('submit',null,'Buscar',array('class'=>'btn btn-primary'))}}
    <div class="bg-danger" id="_name">{{$errors->first('buscar')}}</div>

{{Form::close()}}          

<center><h1><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Lista cuentas Catalogo</h1></center>
<label class="label left label-info">Página {{$resultado->getCurrentPage()}} de un total de {{$resultado->getTotal()}} páginas</label>
<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>C</th>
            <th>SC</th>
            <th>G</th>
            <th>SG</th>
            <th>P</th>
            <th>SP</th>
            <th>R</th>
            <th>SR</th>
            <th>F</th>
            <th>Descripcion</th>
            <th>Tipo</th>
            <th>Grupo</th>
            <th>Editar</th>
        <tr>      
    <thead>
    <tbody>    
        <!-- inicio mostramos todos los datos de la tabla catalogo -->
        @foreach($resultado As $datos) <?php dd($datos->group); // ?>
        <tr>  
            <td>{{$datos->c}}</td>
            <td>{{$datos->sc}}</td>
            <td>{{$datos->g}}</td>
            <td>{{$datos->sg}}</td>
            <td>{{$datos->p}}</td>
            <td>{{$datos->sp}}</td>
            <td>{{$datos->r}}</td>
            <td>{{$datos->sr}}</td>
            <td>{{$datos->f}}</td>
            <td>{{$datos->name}}</td>
            @if($datos->type==1)
            <td>Ingreso</td>
            @else
            <td>Gastos</td>
            @endif
            <td>{{$datos->group->name}}</td>
            <td><a class="btn btn-warning" href="{{URL::action('CatalogsController@edit',$datos->id)}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
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
