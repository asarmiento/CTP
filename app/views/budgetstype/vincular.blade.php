@extends('template.main')
@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palabras, clave">     
<title>Vincular Presupuestos - Tipo Presupuesto</title>
@stop
@section('title')
<h1 class="text-lowercase">Vincular Tipo Presupuesto - Presupuesto</h1>
@stop
@section('container') 
      
<center><h1><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Vincular Tipos de Presupuestos a los Presupuestos</h1></center>
<div class="table-responsive">
 <div class="form-group">    
     {{ Form::open(array(
            'action'=>'TipoPresupuestoController@postVincular',
            'method'=>'POST',
            'role'=>'form',
            'class'=>'form-inline'
            ))}}
        {{Form::label('Grupo','Presupuesto',array('class'=>'text-right'))}}
        <select name="presupuesto" class="form-control">
            @foreach(DB::connection("diurno")->select("select * from tipo_presupuestos ") AS $datas) 
            <option value="{{$datas->id}}">{{$datas->nombre}}</option>
            @endforeach
        </select>
        <i class="btn-danger text-danger">{{$errors->first('presupuesto')}}</i>
    </div>
     <div class="form-group">        
        {{Form::label('tpresupuesto','Tipos de Presupuestos',array('class'=>'text-right'))}}
        <select name="tpresupuesto" class="form-control">
            @foreach(DB::connection("diurno")->select("select * from columnas ") AS $datos) 
            <option value="{{$datos->id}}">{{$datos->nombre}}</option>
            @endforeach
        </select>
        <i class="btn-danger text-danger">{{$errors->first('tpresupuesto')}}</i>
    </div>
    <hr>
    <div class="form-group">      
        <center>{{Form::input('submit',null,'Vincular',array('class'=>'btn btn-primary'))}}</center>
    </div>
    {{Form::close()}}  
</div>
<div class="table-responsive">
    <label class="label left label-info">Página {{$resultado->getCurrentPage()}} de un total de {{$resultado->getTotal()}} páginas</label>
    @if(Session::has('message'))
    <div class="text-info"> {{ Session::get('message') }}</div>
            @endif
    <table class="table">
    <thead>
        <tr>
            <th>Presupuesto</th>
            <th>Tipo Presupuesto</th>
            <th>Eliminar</th>
        <tr>      
    <thead>
    <tbody class="list">    
        <!-- inicio mostramos todos los datos de la tabla catalogo -->
        @foreach($resultado As $datos)
        <tr>  
            <td>{{$datos->presupuesto}}</td>
            <td>{{$datos->tpresupuesto}}</td>
            <td><a class="btn btn-danger" href="{{URL::action('TipoPresupuestoController@getDesvincular',$datos->id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>
	</tr>
        @endforeach
        <!-- Fin de la tabla catalogo -->
    </tbody>
</table>
</div>
<div class="container">
   {{$resultado->links()}}
</div>
@stop
