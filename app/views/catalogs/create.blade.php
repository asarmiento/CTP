@extends('template.main')
@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palahras, clave">     
<title>{{$action}} Catalogo</title>
@stop
@section('title')
<h1 class="text-lowercase">{{$action}} cuentas Catalogo</h1>
@stop
@section('container') 
<button onclick="location = '/catalogos'"  class="btn btn-primary" type="button">
    Lista <span class="badge"></span>
</button>
<hr>
<center><h1><span class="glyphicon glyphicon-save"></span>&nbsp;Formulario {{$action}} nuevas Cuentas</h1></center>
<div class="table-responsive">
    @if(isset($message))
    <div class="text text-info "><span class="glyphicon glyphicon-ok"></span> <strong>Se Guardo con exito los Datos {{$message}}</strong> </div>
    @endif

    {{ Form::model($catalogo,$form_data,array('role'=>'form','class'=>'form-inline'))}}
    {{ Field::text('c') }}
    {{ Field::text('sc') }}
    <hr>
    {{ Field::text('g') }}
    {{ Field::text('sg') }}
    <hr>
    {{ Field::text('p') }}
    {{ Field::text('sp') }}
    <hr>
    {{ Field::text('r') }}
    {{ Field::text('sr') }}
    <hr>
    {{ Field::text('f') }}
    {{ Field::text('nombre') }}
    <hr>
    {{ Field::select('tipo',null,['class'=>'form-control text-right'],[''=>'Elija un Tipo','1'=>'Ingreso','0'=>'Gastos']) }}
    {{ Field::select('grupos','',['class'=>'form-control'],$grupo) }}
    <hr>
    <div class="form-group">      
        {{Form::input('submit',null,'Agregar',array('class'=>'btn btn-primary'))}}
    </div>
    <div class="bg-danger" id="_name">{{$errors->first('buscar')}}</div>

    {{Form::close()}}  

</div>     

@stop