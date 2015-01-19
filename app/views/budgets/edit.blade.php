@extends('template.main')
@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palahras, clave">     
<title>Update Presupuesto</title>
@stop
@section('title')
<h1 class="text-lowercase">Update Presupuesto</h1>
@stop
@section('container') 
<button onclick="location = '/grupos'"  class="btn btn-primary" type="button">
    Lista <span class="badge"></span>
</button>

<hr>


 <center><h1><span class="glyphicon glyphicon-edit"></span>&nbsp;Formulario actualizar Presupuesto</h1></center>
<div class="table-responsive">

  @foreach($resultado as $data) @endforeach
  <?php //var_dump($data); exit; ?>
     {{ Form::open(array(
            'action'=>'PresupuestoController@postEdit',
            'method'=>'post',
            'role'=>'form',
            'class'=>'form-inline'
            ))}}
     <div class="form-group">        
    {{Form::label('nombre', 'Nombre:',array('class'=>'text-right '))}}
    {{Form::input('text','nombre',$data->nombre,array('class'=>'form-control'))}}
    {{$errors->first('nombre')}}
     </div>
     <div class="form-group">        
    {{Form::label('fuente','Fuente Financiamiento:',array('class'=>'text-right'))}}
    {{Form::input('text','fuente',$data->fuente_financiamiento,array('class'=>'form-control','size'=>80))}}
    {{$errors->first('fuente')}}
    </div><hr>
     <div class="form-group">        
    {{Form::label('descripcion',utf8_encode('Descripción'),array('class'=>'text-right'))}}
    {{Form::input('text','descripcion',$data->descripcion,array('class'=>'  form-control'))}}
    {{$errors->first('descripcion')}}
    </div>
     <div class="form-group">        
    {{Form::label('year',utf8_encode('Año:'),array('class'=>'text-right'))}}
    {{Form::input('text','year',$data->year,array('class'=>'form-control'))}}
    {{$errors->first('year')}}
    </div><hr>
     <div class="form-group">        
    {{Form::label('tipo','Tipo Presupuesto',array('class'=>'text-right'))}}
    <select name="tipo" class="form-control">
       <option value="0">Ordinario</option>
       <option value="1">ExtraOrdinario</option>
    </select>
    {{$errors->first('tipo')}}
    </div>
     <div class="form-group">        
    {{Form::label('global','Global',array('class'=>'text-right'))}}
    <select name="global" class="form-control">
        <?php $contador=array(1,2,3,4,5,6,7,8,9,10); ?>
        @for($i=1;$i< count($contador);$i++)
       <option value="{{$i}}">Global {{$i}}</option>
       @endfor
       
    </select>
    {{$errors->first('global')}}
    </div><hr>
    
     <div class="form-group">      
         {{Form::input('hidden','id',$data->id)}}
    {{Form::input('submit',null,Input::old('Buscar'),array('class'=>'btn btn-primary'))}}
     </div>
   

{{Form::close()}}       
</div>     

@stop