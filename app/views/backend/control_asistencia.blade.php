@extends('plantillas.dashboard')

@section('titulo')
  Control de Asistencia
@stop

@section('miga')
  Control de Asistencia
@stop

@section('content')

<form role="form">
  <div class="form-group">
    <div class="col-md-4">
      <div class="form-group">
        <label class="col-md-5 control-label" for="fecha?ini">Fecha Inicial</label>  
        <div class="col-md-7">
          <input id="fecha?ini" name="fecha?ini" type="text" placeholder="" class=" picker form-control">
        </div>
      </div> 
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label class="col-md-5 control-label" for="fecha?ini">Fecha Final</label>  
        <div class="col-md-7">
          <input id="fecha?fin" name="fecha?fin" type="text" placeholder="" class=" picker form-controlvalida">
        </div>
      </div>      
    </div>
    <div class="col-md-2">
      <input type="submit" class="btn btn-primary form-control " id="buscar" value="Buscar"> 
    </div> 
  </div>
 
<br><br><br>

 <div class="panel panel-default">
    <div class="panel-heading">
        Listado de asistencia del personal
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="table-responsive">
            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                  <thead>
                    <tr role="row">
                      <th>Ficha</th>
                      <th>Nombre</th>
                      <th>Fecha</th>
                      <th>Hora de Llegada</th>
                      <th>Hora de Salida</th>
                      <th>Observacion</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>                                     
                    <tr class="gradeA odd">
                      <td class="sorting_1"></td>
                      <td class=""></td>
                      <td class=""></td>
                      <td class=""></td>
                      <td class=""></td>
                      <td class=""></td>
                      <td style="padding-left: 35px;">
                         <a class="clickable" data-toggle="modal" data-target="#editarobservaciones" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>')" ><span class="glyphicon glyphicon-pencil"></span></a>
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
  <div class="col-md-2 pull-right">
    <button type="submit" class="btn btn-primary form-control " id="Bpdf" value="Generar PDF">
      <i class="glyphicon glyphicon-share"></i> Generar PDF
    </button>
  </div> 
</form>
@stop

 @section('modal')

 <div class="modal fade" id="editarobservaciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar Observaciones</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="ficha">Ficha</label>  
            <div class="col-md-3">
              <input id="ficha" name="ficha" type="text" placeholder="" disabled class="form-control input-md"> 
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="ficha">Nombre del Empleado</label>  
            <div class="col-md-3">
              <input id="nomrbre" name="nombre" type="text" placeholder="" disabled class="form-control input-md"> 
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="ficha">Fecha</label>  
            <div class="col-md-3">
              <input id="fecha" name="fecha" type="text" placeholder="" disabled class="form-control input-md"> 
            </div>
          </div>          
          <!-- Textarea -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="observaciones">Observaciones</label>
            <div class="col-md-7">                     
              <textarea class="form-control" id="observaciones" name="observaciones"></textarea>
            </div>
          </div>
        </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div><!-- /.modal-content -->
  </div>
 </div>
 @stop