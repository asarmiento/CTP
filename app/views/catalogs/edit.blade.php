@extends('template.main')
@section('head')
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palahras, clave">     
<title>Update Catalogo</title>
@stop
@section('title')
<h1 class="text-lowercase">Update Catalogo</h1>
@stop
@section('container') 
<button onclick="location = '/grupos'"  class="btn btn-primary" type="button">
    Lista <span class="badge"></span>
</button>

<hr>


 <center><h1><span class="glyphicon glyphicon-edit"></span>&nbsp;Formulario actualizar Cuentas</h1></center>
<div class="table-responsive">

  @foreach($resultado as $data) @endforeach
  <?php //var_dump($data); exit; ?>
     {{ Form::open(array(
            'action'=>'CatalogoController@postEdit',
            'method'=>'post',
            'role'=>'form',
            'class'=>'form-inline'
            ))}}
     <div class="form-group">        
    {{Form::label('C', 'C',array('class'=>'text-right '))}}
    {{Form::input('text','c',$data->C,array('class'=>'form-control'))}}
    {{$errors->first('c')}}
     </div>
     <div class="form-group">        
    {{Form::label('SC','SC',array('class'=>'text-right'))}}
    {{Form::input('text','sc',$data->SC,array('class'=>'form-control'))}}
    {{$errors->first('sc')}}
    </div><hr>
     <div class="form-group">        
    {{Form::label('P','P',array('class'=>'text-right'))}}
    {{Form::input('text','p',$data->P,array('class'=>'  form-control'))}}
    {{$errors->first('p')}}
    </div>
     <div class="form-group">        
    {{Form::label('SP','SP',array('class'=>'text-right'))}}
    {{Form::input('text','sp',$data->SP,array('class'=>'form-control'))}}
    {{$errors->first('sp')}}
    </div><hr>
     <div class="form-group">        
    {{Form::label('R','R',array('class'=>'text-right'))}}
    {{Form::input('text','r',$data->R,array('class'=>'form-control'))}}
    {{$errors->first('r')}}
    </div>
     <div class="form-group">        
    {{Form::label('SR','SR',array('class'=>'text-right'))}}
    {{Form::input('text','sr',$data->SR,array('class'=>'form-control'))}}
    {{$errors->first('sr')}}
    </div><hr>
     <div class="form-group">        
    {{Form::label('F','F',array('class'=>'text-right'))}}
    {{Form::input('text','f',$data->F,array('class'=>'form-control'))}}
    {{$errors->first('f')}}
    </div>
     <div class="form-group">        
    {{Form::label('Descripcion','Descripcion',array('class'=>'text-right'))}}
    {{Form::input('text','descripcion',$data->Descripcion,array('class'=>'form-control ','size'=>80))}}
    {{$errors->first('descripcion')}}
    </div><hr>
     <div class="form-group">        
    {{Form::label('Grupo','Grupo de Cuenta',array('class'=>'text-right'))}}
    <select name="name_grupo_id" class="form-control">
        <?php $datas = DB::connection("diurno")->select("select * from name_group where id = ".$data->name_group_id); ?>
       @foreach($datas AS $datos)  @endforeach
       <option value="{{$datos->id}}">{{$datos->nombre}}</option>
       
       @foreach(DB::connection("diurno")->select("select * from name_group ") AS $datas) 
       <option value="{{$datas->id}}">{{$datas->nombre}}</option>
       @endforeach
    </select>
    {{$errors->first('name_group_id')}}
    </div><hr>
     <div class="form-group">      
         {{Form::input('hidden','id',$data->id)}}
    {{Form::input('submit',null,Input::old('Buscar'),array('class'=>'btn btn-primary'))}}
     </div>
    <div class="bg-danger" id="_name">{{$errors->first('buscar')}}</div>

{{Form::close()}}       
</div>     

@stop