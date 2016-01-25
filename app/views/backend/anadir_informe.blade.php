@extends('plantillas.dashboard')

@section('titulo')
  Anadir Informe de Gestion Semanal
@stop

@section('miga')
  Anadir 
@stop

@section('content')
<br><br>
<form class="form-horizontal">
    <div class="row">
    <div class="col-lg-5">  
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-6 control-label" for="codigo">Periodo Inicial</label>  
      <div class="col-md-6">
      <input id="codigo" name="codigo" type="text" placeholder="" class="picker form-control input-md">
        
      </div>
    </div>
  </div><!-- COL-->
  <div class="col-lg-5">
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-6 control-label" for="revision">Periodo Final</label>  
      <div class="col-md-6">
      <input id="revision" name="revision" type="text" placeholder="" class="picker form-control input-md">
        
      </div>
    </div>
  
    </div>
    </div>
    <button type="button"class="btn btn-success pull-right" data-dismiss="modal">Anadir</button>
  </form>
  <br><br><br>
 <form class="form-horizontal"> 
  <div class="panel panel-default">
      <div class="panel-heading">
          Actividades por Departamento
            <div class="pull-right">
               <span class="clickable" data-toggle="modal" data-target="#modalanadiractividad" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>',0,0)" title="Agregar Usuario" data-container="body">
                  <i class="glyphicon glyphicon-plus"></i>                        
               </span>                     
            </div>
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
		<div class="table-responsive">
            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                  <thead>
                    <tr role="row">
                      <th>Nombre del Departamento</th>
                      <th>Nombre de la Actividad</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>                                     
                    <tr class="gradeA odd">
                      <td class="sorting_1"></td>
                      <td class=""></td>
                      <td style="padding-left: 20px;">
                         <a class="clickable" data-toggle="modal" data-target="#eliminarActividad" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>')" ><span class="glyphicon glyphicon-trash"></span></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
	 
      </div>
      <!-- /.panel-body -->

  	</div>
	<button type="button"class="btn btn-success pull-right" data-dismiss="modal" style="margin-top: 2%;">Guardar Informe</button>
 </form>
  
@stop
@section('modal')
 <!-- Modal -->
 <div class="modal fade bs-example-modal-lg" id="modalanadiractividad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-lg" id="modal-dialog">	
 <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Anadir Actividad</h4>
      </div>
      <div class="modal-body">
	    <form class="form-horizontal">

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="actividad">Nombre del Departamento</label>  
		  <div class="col-md-4">
		  <input id="departamento" name="departamento" type="text" placeholder="" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="actividad">Actividad</label>  
		  <div class="col-md-4">
		  <input id="actividad" name="actividad" type="text" placeholder="" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- File Button --> 
		<div class="form-group">
		  <label class="col-md-4 control-label" for="ejecucion">Ejecucion</label>
		  <div class="col-md-4">
		    <input id="ejecucion" name="ejecucion" class="input-file" type="file">
		  </div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="justificacion">Justificacion</label>
		  <div class="col-md-4">                     
		    <textarea class="form-control" id="justificacion" name="justificacion"></textarea>
		  </div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="accion">Accion Correctiva</label>
		  <div class="col-md-4">                     
		    <textarea class="form-control" id="accion" name="accion"></textarea>
		  </div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="actividadsem">Actividad Semanal</label>
		  <div class="col-md-4">                     
		    <textarea class="form-control" id="actividadsem" name="actividadsem"></textarea>
		  </div>
		</div>

		<!-- File Button --> 
		<div class="form-group">
		  <label class="col-md-4 control-label" for="anadirtabla">Anadir tabla Proyecto/Fases</label>
		  <div class="col-md-4">
		    <input id="anadirtabla" name="anadirtabla" class="input-file" type="file">
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-5 control-label" for="guardar"></label>
		  <div class="col-md-4">
		    <button id="guardar" name="guardar" class="btn btn-success">Guardar</button>
		  </div>
		</div>

	</form>
    
      </div>
      <div class="modal-footer">
      </div>
    </div><!-- /.modal-content -->
 </div>
 </div>

 <div id="eliminarActividad" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Eliminar Actividad</h4>
      </div>
      <div class="modal-body">
        ¿Seguro que desea eliminar la Actividad del Informe?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

  @stop