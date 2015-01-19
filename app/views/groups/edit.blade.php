@extends('template.main')
@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palabras, clave">     
<title>Grupos de Cuenta</title>
@stop
@section('title')
<h1 class="text-lowercase">Listas de Grupos de Cuentas</h1>
@stop
@section('container') 
<button onclick="location = '/grupos'"  class="btn btn-primary" type="button">
    Lista <span class="badge"></span>
</button>

<hr>
<div>
   
        {{ Form::model($grupos,array(
             'action'=>'GruposController@update',
                'method'=>'get',
                'role'=>'form',
                'class'=>'form-inline'
                ))}}
             
       {{ Field::text('codigo') }}
         {{ Field::text('nombre') }}     
        <div class="form-group">
            {{Form::submit('Cambiar',array('class'=>'btn btn-primary'))}} 
        </div>
        {{Form::close()}} 
    
</div>
@stop