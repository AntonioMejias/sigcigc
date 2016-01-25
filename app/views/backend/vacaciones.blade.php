@extends('plantillas.dashboard')

@section('titulo')
  Control de Vacaciones
@stop

@section('miga')
  Vacaciones
@stop


@section('content')
<form role="form">
  <div class="form-group">
    <div class="col-md-2">
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="Ficha del empleado" type="text">
    </div>
      <div class="col-md-2">
         <input type="submit" class="btn btn-primary form-control" id="buscar" value="Buscar"> 
      </div> 
  </div>
</form>
<br>
<form role="form" style="background: #FFFFFF;MARGIN-TOP: 50PX;">
  <div class="table-responsive"> 
    <table class="table">
      <thead>
        <tr>
          <th>Departamentos</th>
          <th>#</th>
          <th>Ficha</th>
          <th>Nombres y Apellidos</th>
          <th></th>
          <th>ENE</th>
          <th>FEB</th>
          <th>MAR</th>
          <th>ABR</th>
          <th>MAY</th>
          <th>JUN</th>
          <th>JUL</th>
          <th>AGO</th>
          <th>SEP</th>
          <th>OCT</th>
          <th>NOV</th>
          <th>DIC</th>
          <th>Observación</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <th scope="rowgroup" rowspan="3">GENRECIA CIGC
            <th scope="rowgroup" rowspan="3">1
            <th scope="rowgroup" rowspan="3">5843
            <th scope="rowgroup" rowspan="3">GRAFFE G. JOSE LUIS
        </tr>
        <tr>
            <th scope="row">P</th>
            <td>1</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td scope="rowgroup" rowspan="3"> prueba</td>
            <td scope="rowgroup" rowspan="3">
              <a class="clickable" data-toggle="modal" data-target="#editarvacaciones" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>')" >
                <span class="glyphicon glyphicon-pencil"></span>
              </a>
            </td>
        </tr>
        <tr>
            <th scope="row">R</th>
            <td>1</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-md-2 pull-right">
   <button type="submit" class="btn btn-primary form-control " id="Bpdf" value="Generar PDF"><i class="glyphicon glyphicon-share"></i> Generar PDF</button>
  </div> 
  </form>
  @stop

  @section('modal')
 <!-- Modal -->
 <div class="modal fade" id="editarvacaciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog" id="modal-dialog">
 <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar vacaciones</h4>
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
          <div class="row">
          <div class="col-lg-6"> 
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-6 control-label" for="p">Fecha Inicio P</label>  
              <div class="col-md-6">
              <input id="p" name="p" type="text" placeholder="" style="z-index: 999;"class="picker form-control">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-6 control-label" for="r">Fecha Inicio R</label>  
              <div class="col-md-6">
              <input id="r" name="r" type="text" placeholder="" style="z-index: 999;"class="picker form-control">
                
              </div>
            </div>
              </div>
                <div class="col-lg-6">
                <div class="form-group">
                <label class="col-md-4 control-label" for="r">Fecha fin P</label>  
                <div class="col-md-6">
                <input id="fechap" name="fechap" type="text" placeholder="" style="z-index: 999;"class="picker form-control">  
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4 control-label" for="r">Fecha fin R</label>  
                <div class="col-md-6">
                <input id="fechar" name="fechar" type="text" placeholder="" style="z-index: 999;" class="picker form-control">
                  
                </div>
              </div>
            
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