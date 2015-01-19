@extends('layouts.base')
@section('content')
<nav class="navbar navbar-inverse" role="navigation">    
    <div class="container-fluid">      
        <!-- Brand and toggle get grouped for better mobile display -->  
        <!-- Collect the nav links, forms, and other content for toggling -->    
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
            <ul class="nav navbar-nav">         
            </ul>        
            <ul class="nav navbar-nav navbar-right ">   
                <li class="dropdown">                  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quepos Diurno<span class="caret"></span></a>  
                    <ul class="dropdown-menu" role="menu">                        
                        <li><a>{{ HTML::link('/setup/', 'Configuracion') }}</a></li>    
                        <li><a>{{ HTML::link('/grupos/', 'Lista Grupos de Cuentas') }}</a></li>    
                        <li><a>{{ HTML::link('/catalogos/', 'Lista Catalogo') }}</a></li>    
                        <li><a>{{ HTML::link('/tpresupuestos/', 'Tipos de Presupuesto') }}</a></li>                  
                        <li><a>{{ HTML::link('/presupuestos/', 'Presupuestos') }}</a></li>                  
                        <li><a>{{ HTML::link('/saldopresupuestos/', 'Saldo Cuenta Presupuestos') }}</a></li>                  
                        <li><a>{{ HTML::link('/planillas/', 'Planillas') }}</a></li>                  
                        <li><a>{{ HTML::link('/cheques/', 'Cheques') }}</a></li>                  
                        <li><a>{{ HTML::link('/transferencias/', 'Transferencias') }}</a></li>                  
                        <li><a>{{ HTML::link('/proveedores/', 'Proveedores') }}</a></li>                  
                    </ul>               
                </li>               
                <li class="dropdown">   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quepos Nocturno<span class="caret"></span></a>  
                    <ul class="dropdown-menu" role="menu">                   
                        <li><a>{{ HTML::link('/users/add', 'Agregar Usuario') }}</a></li>    
                        <li><a>{{ HTML::link('/users', 'Ver Usuarios') }}</a></li>     
                    </ul>                
                </li>              
                <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matapalo<span class="caret"></span></a>   
                    <ul class="dropdown-menu" role="menu">              
                        <li><a>{{ HTML::link('/users/add', 'Agregar Usuario') }}</a></li> 
                        <li><a>{{ HTML::link('/users', 'Ver Usuarios') }}</a></li>        
                    </ul>               
                </li>              
                <li class="dropdown">   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Paquita<span class="caret"></span></a>   
                    <ul class="dropdown-menu" role="menu">                       
                        <li><a>{{ HTML::link('/users/add', 'Agregar Usuario') }}</a></li>  
                        <li><a>{{ HTML::link('/users', 'Ver Usuarios') }}</a></li>  
                    </ul>               
                </li>               
                <li class="dropdown">   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios<span class="caret"></span></a>                    
                    <ul class="dropdown-menu" role="menu">                        
                        <li><a>{{ HTML::link('/users/add', 'Agregar Usuario') }}</a></li> 
                        <li><a>{{ HTML::link('/users', 'Ver Usuarios') }}</a></li>        
                    </ul>                </li>               
                <li class="dropdown">                   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones&nbsp;<span class=" glyphicon glyphicon-cog"></span></a>   
                    <ul class="dropdown-menu" role="menu">                      
                        <li>{{ HTML::link('/logout', 'Cerrar sesión') }}</li>       
                    </ul>              
                </li>           
            </ul>       
        </div><!-- /.navbar-collapse -->   
    </div><!-- /.container-fluid --></nav>
<div class="container principal">@yield('container')</div>
@stop