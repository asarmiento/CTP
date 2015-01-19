@extends('template.main')
@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palahras, clave">     
<title>{{$action}} Presupuesto</title>
@stop
@section('title')
<h1 class="text-lowercase">Nuevo Presupuesto</h1>
@stop
@section('container') 
<button onclick="location = '/presupuestos'"  class="btn btn-primary" type="button">
    Lista <span class="badge"></span>
</button>

<hr>


<center><h1><span class="glyphicon glyphicon-save"></span>&nbsp;Formulario Agregar nuevo Presupuesto</h1></center>
<div class="table-responsive form-special">
    @if(isset($datos))
    <div class="text text-info "><span class="glyphicon glyphicon-ok"></span> Se Guardo con exito</div>
    @else

    {{ Form::model($presupuesto,$form_data,array('role'=>'form',
            'class'=>'form-inline'
            ))}}
    {{ Field::text('nombre') }}
    {{ Field::text('fuente') }}
    {{ Field::text('descripcion') }}
    {{ Field::text('year') }}
    {{ Field::select('tipo') }}
    {{ Field::select('global') }}


    <div class="form-group">      
        {{Form::input('submit',null,'Agregar',array('class'=>'btn btn-primary'))}}
    </div>

    {{Form::close()}}  
    @endif  
</div>     

@stop