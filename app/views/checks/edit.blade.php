@extends('template.main')
@section('head')
{{ HTML::script('/js/general.js') }}
{{ HTML::script('/js/cheques.js') }}
<meta name="description" content="Pagina inicio">
<meta name="author" content="Anwar Sarmiento">
<meta name="keyword" content="palahras, clave">     
<title>Actualizar Cheque</title>
@stop
@section('title')
<h1 class="text-lowercase">Actualizar Cheque</h1>
@stop
@section('container') 
<button onclick="location = '/cheques'"  class="btn btn-primary" type="button">
    Lista <span class="badge"></span>
</button>

<hr>


<center><h1><span class="glyphicon glyphicon-save"></span>&nbsp;Formulario Actualizar Cheque</h1></center>
<div class="table-responsive">
    @if(isset($datos))
    <div class="text text-info "><span class="glyphicon glyphicon-ok"></span>Se Actualizo con exito El Cheque </div>
    @else

    {{ Form::open(array(
            'action'=>'ChequeController@postEdit',
            'method'=>'post',
            'role'=>'form',
            'class'=>'form-inline'
            ))}}
              @foreach($resultado as $data) @endforeach
    <div class="form-group ">   
        <div>{{Form::label('Grupo','Presupuesto',array('class'=>'text-right'))}}</div>
        <div> <select name="presupuesto" class="form-control">
               
                @foreach(DB::connection("diurno")->select("select * from presupuesto 
                INNER JOIN tipo_presupuestos ON tipo_presupuestos.id=presupuesto.tipo_presupuestos_id
                where presupuesto.id = ". $data->presupuestos_id) AS $datas) 
                <option value="{{$datas->id}}">{{$datas->nombre}} - {{$datas->year}}</option>
                @endforeach
                @foreach(DB::connection("diurno")->select("select * from tipo_presupuestos ") AS $datas) 
                <option value="{{$datas->id}}">{{$datas->nombre}} - {{$datas->year}}</option>
                @endforeach
            </select></div>
        </br><i class="text-danger">{{$errors->first('presupuesto')}}</i>
    </div> 
     <div class="form-group ">   
        <div>{{Form::label('Grupo','Tipo Presupuesto',array('class'=>'text-right'))}}</div>
        <div> <select name="tipopresupuesto" id="tipopresupuesto"  class="form-control">
                @foreach(DB::connection("diurno")->select("select columnas.id, columnas.nombre from presupuesto 
                INNER JOIN columnas ON columnas.id=presupuesto.columna_id
                where presupuesto.id = ". $data->presupuestos_id) AS $datas) 
                <option value="{{$datas->id}}">{{$datas->nombre}}</option>
                @endforeach
            </select></div>
        </br><i class="text-danger">{{$errors->first('presupuesto')}}</i>
    </div>    
     <div class="form-group ">   
        <div>{{Form::label('Grupo','Cuenta de Presupuesto',array('class'=>'text-right'))}}</div>
        <div> <select name="cuentapresupuesto" id="cuentapresupuesto" class="form-control">
                @foreach(DB::connection("diurno")->select("select presupuesto.id, catalogo.Descripcion from presupuesto 
                INNER JOIN catalogo ON catalogo.id=presupuesto.catalogo_id
                where presupuesto.id = ". $data->presupuestos_id) AS $datas) 
                <option value="{{$datas->id}}">{{$datas->Descripcion}}</option>
                @endforeach
            </select></div>
        </br><i class="text-danger">{{$errors->first('presupuesto')}}</i>
    </div>             
    <div class="form-group">        
        <div>{{Form::label('factura', 'Factura:',array('class'=>'text-right '))}}</div>
        <div>{{Form::input('text','factura',$data->factura,array('class'=>'form-control'))}}</div>
        </br><div class="text-danger">{{$errors->first('factura')}}</div>
    </div>
    <div class="form-group">   
        <div>{{Form::label('proveedor','Proveedor',array('class'=>'text-right'))}}</div>
        <div><select name="proveedor" class="form-control">
                @foreach(DB::connection("diurno")->select("select * from proveedor where id = ". $data->proveedor_id) AS $datas) 
                <option value="{{$datas->id}}">{{$datas->nombre}} - {{$datas->cedula}}</option>
                @endforeach
                @foreach(DB::connection("diurno")->select("select * from proveedor ") AS $datas) 
                <option value="{{$datas->id}}">{{$datas->nombre}} - {{$datas->cedula}}</option>
                @endforeach
            </select></div>
        </br><div class=" text-danger">{{$errors->first('proveedor')}}</div>
    </div></br>
    <div class="form-group">        
        <div>{{Form::label('concepto',utf8_encode('Concepto:'),array('class'=>'text-right'))}}</div>
        <div>{{Form::input('text','concepto',$data->concepto,array('class'=>'form-control','size'=>60))}}</div>
        </br><div class="text-danger">{{$errors->first('concepto')}}</div>
    </div>
    <div class="form-group">        
        <div>{{Form::label('monto',utf8_encode('Monto:'),array('class'=>'text-right'))}}</div>
        <div>{{Form::input('text','monto',$data->monto,array('class'=>'form-control'))}}</div>
        </br><div class=" text-danger">{{$errors->first('monto')}}</div>
    </div>
    <div class="form-group">        
        <div>{{Form::label('retencion', utf8_encode('Retención:'),array('class'=>'text-right '))}}</div>
        <div>{{Form::input('text','retencion',$data->retencion,array('class'=>'form-control'))}}</div>
        </br><div class="text-danger">{{$errors->first('retencion')}}</div>
    </div>
    <div class="form-group">        
        <div>{{Form::label('ckfactura',utf8_encode('Cheque Factura:'),array('class'=>'text-right'))}}</div>
        <div>{{Form::input('text','ckfactura',$data->ckfactura,array('class'=>'form-control'))}}</div>
        </br><div class="text-danger ">{{$errors->first('ckfactura')}}</div>
    </div></br>
    <div class="form-group">        
        <div>{{Form::label('ckretencion',utf8_encode('Cheque Retención:'),array('class'=>'text-right'))}}</div>
        <div>{{Form::input('text','ckretencion',$data->ckretencion,array('class'=>'form-control'))}}</div>
        </br><div class="text-danger" >{{$errors->first('ckretencion')}}</div>
    </div>
    
    <div class="form-group">   
        <div>{{Form::label('planilla_id','Planilla',array('class'=>'text-right'))}}</div>
        <div><select name="planilla_id" class="form-control">
                @foreach(DB::connection("diurno")->select("select  planilla.id, planilla.numero, planilla.year, tp.nombre from planilla 
                INNER JOIN tipo_presupuestos as tp ON tp.id=planilla.tipo_presupuesto_id where planilla.id = ".$data->planilla_id) AS $datas) 
                <option value="{{$datas->id}}">{{$datas->numero}}-{{$datas->year}} {{$datas->nombre}}</option>
                @endforeach
                @foreach(DB::connection("diurno")->select("select planilla.id, planilla.numero, planilla.year, tp.nombre from planilla 
                INNER JOIN tipo_presupuestos as tp ON tp.id=planilla.tipo_presupuesto_id ") AS $datas) 
                <option value="{{$datas->id}}">{{$datas->numero}}-{{$datas->year}} {{$datas->nombre}}</option>
                @endforeach
            </select>
        </div>
        </br><div class="text-danger">{{$errors->first('planilla_id')}}</div>
    </div>
    <div class="form-group">        
        <div>{{Form::label('acta',utf8_encode('Acta:'),array('class'=>'text-right'))}}</div>
        <div>{{Form::input('text','acta',$data->acta,array('class'=>'form-control'))}}</div>
        </br><div class="text-danger " role="alert">{{$errors->first('acta')}}</div>
    </div>
    <div class="form-group">        
        <div>{{Form::label('date',utf8_encode('Fecha:'),array('class'=>'text-right'))}}</div>
        <div>{{Form::input('date','date',$data->fecha,array('class'=>'form-control','id'=>'fechaCreatePlanilla','readonly'))}}</div>
        </br><div class="text-danger " role="alert">{{$errors->first('date')}}</div>
    </div></br>

    <hr>

    <div style="width: 100%" class="form-group">  
        {{Form::input('hidden','id',$data->id,array('class'=>'form-control'))}}
        <center>{{Form::input('submit',null,'Agregar',array('class'=>'btn btn-primary'))}} </center>
    </div>

    {{Form::close()}}  
    @endif  
</div>     

@stop