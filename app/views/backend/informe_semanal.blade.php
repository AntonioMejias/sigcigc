@extends('plantillas.dashboard')

@section('titulo')
  Informe Semanal
@stop

@section('miga')
  Visualizar
@stop

@section('content')
<form role="form">
  <div class="form-group">
    <div class="col-md-2">
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="Ingresar Semana" type="text">
    </div>
      <div class="col-md-2">
         <input type="submit" class="btn btn-primary form-control" id="buscar" value="Buscar"> 
      </div> 
  </div>
</form>
<br>
<br>
<br>
<div class="panel panel-default">
    <div class="panel-heading">
        Listado de Informes de Gestion Semanal
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="table-responsive">
            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
	                <thead>
	                    <tr role="row">
	                        <th>Codigo del Informe</th>
	                        <th>Semana</th>
	                        <th>Periodo de Inicio</th>
	                        <th>Periodo Final</th>
	                        <th>Accion</th>
	                    </tr>
	                </thead>
	                <tbody>                                     
		                <tr class="gradeA odd">
			                <td class="sorting_1"></td>
			                <td class=" "></td>
			                <td class=" "></td>
			                <td class=""></td>
			                <td style="padding-left: 35px;">
			                   <a class="clickable" data-toggle="modal" data-target="#userAccion" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>')" ><span class="glyphicon glyphicon-eye-open"></span></a>                                                                    
			                   <a class="clickable" data-toggle="modal" data-target="#eliminarObjetivo" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>')" ><span class="glyphicon glyphicon-trash"></span></a>
			                </td>
		                </tr>
	                </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
@stop
@section('modal')
 <!-- Modal -->
 <div class="modal fade" id="userAccion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog" id="modal-dialog">
 <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Visualizar Informe de Gestion Semanal</h4>
      </div>
      <div class="modal-body">
        
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-share"></i> Generar PDF</button>
      </div>
    </div><!-- /.modal-content -->
 </div>
 </div>

 <div id="eliminarObjetivo" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Eliminar Informe</h4>
      </div>
      <div class="modal-body">
        ¿Seguro que desea eliminar el Informe de Gestion Semanal seleccionado?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="delete-u btn btn-danger" value="Eliminar">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  @stop