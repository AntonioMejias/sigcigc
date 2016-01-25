@extends('plantillas.dashboard')

@section('titulo')
  Vizualizar
@stop

@section('miga')
  Objetivo de Gestión
@stop

@section('content')
<form role="form">
  <div class="form-group">
    <div class="col-md-2">
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="Ingrese Codigo de Objetivo" type="text">
    </div>
      <div class="col-md-1">
         <input type="submit" class="btn btn-primary form-control" id="buscar" value="Buscar"> 
      </div> 
  </div>
</form>
<br>
<br>
<br>
<div class="row">
    <div class="col-lg-12">
        <?php if(Session::has('message')) { ?>
        <div class="alert alert-success fade in">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           <h4>Notificacion</h4>
           <p>{{Session::get('message')}}</p>
        </div>    
        <?php 
        Session::forget('message');
        } 
        ?>      
        <div class="panel panel-default">
            <div class="panel-heading">
                Listado Seguimiento de Objetivos de Gestion
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                        <thead>
                            <tr role="row">
                                <th>Codigo del Objetivo</th>
                                <th>Gerencia</th>
                                <th>Proceso</th>
                                <th>Vigencia</th>
                                <th>Año</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>                
                        @foreach ($usuarios as $usuario)                       
                        <tr class="gradeA odd">
                                <td class="sorting_1">{{$usuario->usu_login}}</td>
                                <td class=" ">{{$usuario->usu_apellido}}</td>
                                <td class=" ">{{$usuario->usu_nombre}}</td>
                                <td class="center ">{{$usuario->usu_ficha}}</td>
                                <td class="center ">{{$usuario->usu_departamento}}</td>
                                <td style="padding-left: 35px;">
                                   <a class="clickable" data-toggle="modal" data-target="#userAccion" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>','1','{{$usuario->id}}')" ><span class="glyphicon glyphicon-eye-open"></span></a>                                                                    
                                   <a class="clickable" data-toggle="modal" data-target="#userAccion" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>','3','{{$usuario->id}}')" ><span class="glyphicon glyphicon-trash"></span></a>
                                </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
@stop
@section('modal')
 <!-- Modal -->
 <div class="modal fade" id="userAccion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog" id="modal-dialog">
 <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Visualizar Seguimiento de Objetivo de Gestion</h4>
      </div>
      <div class="modal-body">
        
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div><!-- /.modal-content -->
 </div>
 </div>
  @stop