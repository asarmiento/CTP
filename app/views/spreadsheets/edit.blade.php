@extends('template.main')
@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palahras, clave">     
<title>Update Planilla</title>
@stop
@section('title')
<h1 class="text-lowercase">Update Planilla</h1>
@stop
@section('container') 
<button onclick="location = '/grupos'"  class="btn btn-primary" type="button">
    Lista <span class="badge"></span>
</button>

<hr>


 <center><h1><span class="glyphicon glyphicon-edit"></span>&nbsp;Formulario actualizar Planilla</h1></center>
<div class="table-responsive">

  @foreach($resultado as $data) @endforeach
  <?php //var_dump($data); exit; ?>
     {{ Form::open(array(
            'action'=>'PlanillaController@postEdit',
            'method'=>'post',
            'role'=>'form',
            'class'=>'form-inline'
            ))}}
     <div class="form-group">        
    {{Form::label('Numero', 'Numero:',array('class'=>'text-right '))}}
    {{Form::input('text','numero',$data->numero,array('class'=>'form-control'))}}
    {{$errors->first('numero')}}
     </div>
     <div class="form-group">        
    {{Form::label('year',utf8_encode('Año:'),array('class'=>'text-right'))}}
    {{Form::input('text','year',$data->year,array('class'=>'form-control'))}}
    {{$errors->first('year')}}
    </div><hr>
    <div class="form-group">        
    {{Form::label('date',utf8_encode('Fecha:'),array('class'=>'text-right'))}}
    {{Form::input('date','date',$data->fecha,array('class'=>'form-control','id'=>'fechaCreatePlanilla','readonly'))}}
    {{$errors->first('date')}}
    </div>
     {{Form::label('Grupo','Presupuesto',array('class'=>'text-right'))}}
        <select name="presupuesto" class="form-control">
            @foreach(DB::connection("diurno")->select("select * from tipo_presupuestos where id= ".$data->tipo_presupuesto_id) AS $datos) 
            <option value="{{$datos->id}}">{{$datos->nombre}} - {{$datos->year}}</option>
            @endforeach
            @foreach(DB::connection("diurno")->select("select * from tipo_presupuestos ") AS $datas) 
            <option value="{{$datas->id}}">{{$datas->nombre}} - {{$datas->year}}</option>
            @endforeach
        </select>
        <i class="btn-danger text-danger">{{$errors->first('presupuesto')}}</i>
    </div>
    <hr>
    
     <div class="form-group">    
         {{Form::input('hidden','id',$data->id)}}
    
         <center>{{Form::input('submit',null,'Agregar',array('class'=>'btn btn-primary'))}} </center>
     </div>
   

{{Form::close()}}       
</div>     

@stop