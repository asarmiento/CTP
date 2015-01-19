@extends('template.main')
@section('head')
{{ HTML::script('/js/general.js') }}
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palahras, clave">     
<title>Nueva Planilla</title>
@stop
@section('title')
<h1 class="text-lowercase">Nueva Planilla</h1>
@stop
@section('container') 
<button onclick="location = '/planillas'"  class="btn btn-primary" type="button">
    Lista <span class="badge"></span>
</button>

<hr>


<center><h1><span class="glyphicon glyphicon-save"></span>&nbsp;Formulario Agregar nueva Planilla</h1></center>
<div class="table-responsive">
    @if(isset($datos))
    <div class="text text-info "><span class="glyphicon glyphicon-ok"></span> 
        Se Guardo con exito la planilla  
         {{utf8_encode('Número')}}: <strong> {{$datos['numero']}}</strong>
        {{utf8_encode('Año')}}: <strong> {{$datos['year']}}</strong>
        {{utf8_encode('Fecha')}}: <strong> {{$datos['date']}}</strong>
        </div>
    @else
   
    {{ Form::open(array(
            'action'=>'PlanillaController@postCreate',
            'method'=>'post',
            'role'=>'form',
            'class'=>'form-inline'
            ))}}
     <div class="form-group">        
    {{Form::label('Numero', 'Numero:',array('class'=>'text-right '))}}
    {{Form::input('text','numero',Input::old('numero'),array('class'=>'form-control'))}}
    {{$errors->first('numero')}}
     </div>
     <div class="form-group">        
    {{Form::label('year',utf8_encode('Año:'),array('class'=>'text-right'))}}
    {{Form::input('text','year',Input::old('year'),array('class'=>'form-control'))}}
    {{$errors->first('year')}}
    </div><hr>
    <div class="form-group">        
    {{Form::label('date',utf8_encode('Fecha:'),array('class'=>'text-right'))}}
    {{Form::input('date','date',Input::old('date'),array('class'=>'form-control','id'=>'fechaCreatePlanilla','readonly'))}}
    {{$errors->first('date')}}
    </div>
     {{Form::label('Grupo','Presupuesto',array('class'=>'text-right'))}}
        <select name="presupuesto" class="form-control">
            @foreach(DB::connection("diurno")->select("select * from tipo_presupuestos ") AS $datas) 
            <option value="{{$datas->id}}">{{$datas->nombre}} - {{$datas->year}}</option>
            @endforeach
        </select>
        <i class="btn-danger text-danger">{{$errors->first('presupuesto')}}</i>
    </div>
    <hr>
    
     <div class="form-group">      
         <center>{{Form::input('submit',null,'Agregar',array('class'=>'btn btn-primary'))}} </center>
     </div>
  
    {{Form::close()}}  
    @endif  
</div>     

@stop