@extends('template.main')

@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palabras, clave">     
<title>{{$action}} Grupos de Cuenta</title>
@stop
@section('title')
<h1 class="text-lowercase">{{$action}} Grupo de Cuentas</h1>
@stop
@section('container') 
<a href="grupos" class="btn btn-primary">Lista <span class="badge"></span></a>


<hr> 
<div>
    @if(isset($message))
    <div class="text text-info "><span class="glyphicon glyphicon-ok"></span> <strong>Se Guardo con exito los Datos {{$message}}</strong> </div>
    @endif
        {{ Form::model($grupos,$form_data,array('role'=>'form',
                'class'=>'form-inline'
                ))}}
                {{ Field::text('codigo') }}
      {{ Field::text('nombre') }}
       {{ Field::submit('',$action,array('class'=>'btn btn-primary')) }}
       
        {{Form::close()}} 
   
   
</div>
@stop