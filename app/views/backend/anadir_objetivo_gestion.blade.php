@extends('plantillas.dashboard')

@section('titulo')
  Anadir Seguimiento de Objetivo de Gestión
@stop

@section('miga')
  Anadir Objetivo de Gestión
@stop

@section('content')

<form action="objetivo/crear-objetivo" method="post" class="form-horizontal" id="crear-obj-ges">
  <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">  
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-6 control-label" for="codigo">Codigo</label>  
              <div class="col-md-6">
              <input id="codigo" name="codigo" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-6 control-label" for="revision">Revision</label>  
              <div class="col-md-6">
              <input id="revision" name="revision" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-6 control-label" for="vigencia">Vigencia</label>  
              <div class="col-md-6">
              <input id="vigencia" name="vigencia" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-6 control-label" for="seguimiento">Seguimiento</label>  
              <div class="col-md-6">
              <input id="seguimiento" name="seguimiento" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-6 control-label" for="mes">Mes</label>
              <div class="col-md-6">
                <select id="mes" name="mes" class="form-control">
                  <option value="0">------</option>
                  <option value="1">Enero</option>
                  <option value="2">Febrero</option>
                  <option value="3">Marzo</option>
                  <option value="4">Abril</option>
                  <option value="5">Mayo</option>
                  <option value="6">Junio</option>
                  <option value="7">Julio</option>
                  <option value="8">Agosto</option>
                  <option value="9">Septiembre</option>
                  <option value="10">Octubre</option>
                  <option value="11">Noviembre</option>
                  <option value="12">Diciembre</option>
                </select>
              </div>
            </div>
          </div><!-- COL-->
          <div class="col-lg-8">
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="descripcion">Descripcion</label>  
              <div class="col-md-7">
              <input id="descripcion" name="descripcion" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="objetivo">Objetivo</label>  
              <div class="col-md-7">
              <input id="objetivo" name="objetivo" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="proceso">Proceso</label>  
              <div class="col-md-7">
              <input id="proceso" name="proceso" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="estrategia">Estrategia</label>  
              <div class="col-md-7">
              <input id="estrategia" name="estrategia" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="gerencia">Gerencia</label>  
              <div class="col-md-7">
              <input id="gerencia" name="gerencia" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>
                  
              <input type="submit" class="btn btn-success pull-right" value="Añadir Objetivo">             
             
            </div>
        </div>
        </div>
  </form>

  <div class="alert alert-success fade in info-alert" style="display:none">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <h4>Notificacion</h4>
             <p id="menssage"></p>
  </div> 

  <div class="panel panel-default" id="panel-accion" style="">
      <div class="panel-heading">
          Nueva Accion de Soporte
            <div class="pull-right">
               <span class="clickable" data-toggle="modal" data-target="#userAccion"  data-container="body">
                  <i class="glyphicon glyphicon-plus"></i>                        
               </span>                     
            </div>
      </div>

      <!-- /.panel-heading -->
      <div class="panel-body">
          <div class="table-responsive">
              <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                <form id="crear-accion-indicador">  
                  <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                  <thead>
                      <tr role="row">
                          <th>Accion de Soporte</th>
                          <th>Indicadores <span class="cantidad">(0)</span></th>
                          <th>Accion</th>
                      </tr>
                  </thead>
                  <tbody>                
                                    
                        <tr class="gradeA odd">
                                <td class="sorting_1">
                                 <input id="Get_accion" name="nombre_accion" type="text" placeholder="" class="form-control input-md">
                                </td>
                                <td class=" ">
                                    <select id="Indicador" name="Indicador" class="form-control">
                                      <option value="0"></option>
                                      <option value="1">Numero</option>
                                      <option value="2">Porcentaje</option>
                                      <option value="3">Cantidad</option>
                                    </select>
                                </td>
                                <td style="padding-left: 35px;">                                      
                                    <a class="clickable" data-toggle="modal" data-target="#anadirindicador" ><span class="glyphicon glyphicon-plus"></span></a>
                                    <a class="clickable" data-toggle="modal" data-target="#eliminarAccion" ><span class="glyphicon glyphicon-trash"></span></a>
                        
                           </span>                              
                                </td>
                        </tr>
                         <tr><td><input type="submit"  class="btn btn-success" value="Enviar"></td></tr>

                   
                  
                  </tbody>
                  </table>
                   </form> 
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
 <div class="modal fade bs-example-modal-lg" id="anadirindicador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-lg" id="modal-dialog">  
 <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Anadir Nuevo Indicador</h4>
      </div>
      <div class="modal-body">       
    <form id="form-indicador" class="form-horizontal">
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="indicador">Indicador</label>  
            <div class="col-md-4">
            <input id="indicador" name="indicador" type="text" placeholder="" class="form-control input-md">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="unidad">Unidad de Medida</label>  
            <div class="col-md-4">
            <input id="unidad" name="unidad" type="text" placeholder="" class="form-control input-md">
              
            </div>
          </div>
          <div class"row">
            <div class="col-md-12">
                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                    <thead>
                        <tr role="row">
                            <th> </th>
                            <th>Ene</th>
                            <th>Feb</th>
                            <th>Mar</th>
                            <th>Abr</th>
                            <th>May</th>
                            <th>Jun</th>
                            <th>Jul</th>
                            <th>Ago</th>
                            <th>Sep</th>
                            <th>Oct</th>
                            <th>Nov</th>
                            <th>Dic</th>
                        </tr>
                    </thead>
                    <tbody>                                    
                    <tr class="gradeA odd">
                      <td><p>P</p></td>
                      <td><input id="enero-p" name="enero-p" type="text" placeholder="" class="form-control"></td>
                      <td><input id="febrero-p" name="febrero-p" type="text" placeholder="" class="form-control"></td>
                      <td><input id="marzo-p" name="marzo-p" type="text" placeholder="" class="form-control"></td>
                      <td><input id="abril-p" name="abril-p" type="text" placeholder="" class="form-control"></td>
                      <td><input id="mayo-p" name="mayo-p" type="text" placeholder="" class="form-control"></td>
                      <td><input id="junio-p" name="junio-p" type="text" placeholder="" class="form-control"></td>
                      <td><input id="julio-p" name="julio-p" type="text" placeholder="" class="form-control"></td>
                      <td><input id="agosto-p" name="agosto-p" type="text" placeholder="" class="form-control"></td>
                      <td><input id="septiembre-p" name="septiembre-p" type="text" placeholder="" class="form-control"></td>
                      <td><input id="octubre-p" name="octubre-p" type="text" placeholder="" class="form-control"></td>
                      <td><input id="noviembre-p" name="noviembre-p" type="text" placeholder="" class="form-control"></td>
                      <td><input id="diciembre-p" name="diciembre-p" type="text" placeholder="" class="form-control"></td>
                    </tr>
                    <tr class="gradeA odd">
                       <td><p>R</p></td>
                      <td><input id="enero-r" name="enero-r" type="text" placeholder="" class="form-control"></td>
                      <td><input id="febrero-r" name="febrero-r" type="text" placeholder="" class="form-control"></td>
                      <td><input id="marzo-r" name="marzo-r" type="text" placeholder="" class="form-control"></td>
                      <td><input id="abril-r" name="abril-r" type="text" placeholder="" class="form-control"></td>
                      <td><input id="mayo-r" name="mayo-r" type="text" placeholder="" class="form-control"></td>
                      <td><input id="junio-r" name="junio-r" type="text" placeholder="" class="form-control"></td>
                      <td><input id="julio-r" name="julio-r" type="text" placeholder="" class="form-control"></td>
                      <td><input id="agosto-r" name="agosto-r" type="text" placeholder="" class="form-control"></td>
                      <td><input id="septiembre-r" name="septiembre-r" type="text" placeholder="" class="form-control"></td>
                      <td><input id="octubre-r" name="octubre-r" type="text" placeholder="" class="form-control"></td>
                      <td><input id="noviembre-r" name="noviembre-r" type="text" placeholder="" class="form-control"></td>
                      <td><input id="diciembre-r" name="diciembre-r" type="text" placeholder="" class="form-control"></td>
                    </tr>

                    </tbody>
                    </table>
          </div>
          </div>
    </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" id="add-indicador" class="btn btn-primary">Anadir</button>
      </div>
    </div><!-- /.modal-content -->
 </div>
 </div>

 <div id="eliminarAccion" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Eliminar Usuario</h4>
      </div>
      <div class="modal-body">
        ¿Seguro que desea eliminar la accion de soporte seleccionada?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

  @stop