@extends('plantillas.dashboard')

@section('titulo')
  Gestión de Usuarios
@stop

@section('miga')
  Usuarios
@stop
@section('content')
<br>
<div class="row">
    <div class="col-lg-12">
        <?php if(Session::has('message')) { ?>
          <div class="alert alert-success fade in">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <h4>Notificacion</h4>
             <p>{{Session::get('message')}}</p>
          </div>    
        <?php Session::forget('message');
        } 
        ?>  

     

        <div class="panel panel-default">
            <div class="panel-heading">
                Listado Usuarios
                  <div class="pull-right">
                     <span class="clickable agregar-u" data-toggle="modal" data-target="#añadirUsuario" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>',0,0)" title="Agregar Usuario" data-container="body">
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
                                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" >Login</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  >Apellido</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Nombre</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Cedula</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Ficha</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Depart</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Correo</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Accion</th></tr>
                        </thead>
                        <tbody>                
                        @foreach ($usuarios as $usuario)                       
                        <tr class="gradeA odd">
                                <td id="usuario-t" class="sorting_1">{{$usuario->usu_login}}</td>
                                <td id="apellido-t" class=" ">{{$usuario->usu_apellido}}</td>
                                <td id="nombre-t" class=" ">{{$usuario->usu_nombre}}</td>
                                <td id="cedula-t" class="center ">{{$usuario->usu_cedula}}</td>
                                <td id="ficha-t" class="center ">{{$usuario->usu_ficha}}</td>
                                <td id="departamento-t" class="center ">{{$usuario->usu_departamento}}</td>
                                <td id="correo-t" class="center ">{{$usuario->usu_correo}}</td>
                                <td id="" style="padding-left: 35px;">
                                   <a  class="clickable edit-t" data-toggle="modal" data-target="#añadirUsuario" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>','1','{{$usuario->id}}')" ><span class="glyphicon glyphicon-pencil"></span></a>                              
                                   <a  class="clickable delete-t" data-toggle="modal" data-target="#eliminarUsuario" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>','2','{{$usuario->id}}')" ><span class="glyphicon glyphicon-trash"></span></a>                                       
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
 <div class="modal fade" id="añadirUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog" id="modal-dialog">
 <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Añadir/Modificar Usuario</h4>
      </div>
      <div class="modal-body">
        <form action="backend/nuevo_usuario" method ="post" id="form-edit-creat" class="form-horizontal">
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nombre">Nombre</label>  
            <div class="col-md-4">
            <input id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md" required>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="apellido">Apellido</label>  
            <div class="col-md-4">
            <input id="apellido" name="apellido" type="text" placeholder="" class="form-control input-md" required> 
            </div>
          </div>

           <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="apellido">Cedula</label>  
            <div class="col-md-4">
            <input id="cedula" name="cedula" type="text" placeholder="" class="form-control input-md" required> 
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="usuario">Usuario</label>  
            <div class="col-md-4">
            <input id="usuario" name="usuario" type="text" placeholder="" class="form-control input-md" required>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="ficha">Ficha</label>  
            <div class="col-md-2">
            <input id="ficha" name="ficha" type="text" placeholder="" class="form-control input-md" required>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="departamento">Nro del Departamento</label>  
            <div class="col-md-2">
            <input id="departamento" name="departamento" type="text" placeholder="" class="form-control input-md" required> 
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="correo">Correo</label>  
            <div class="col-md-4">
            <input id="correo" name="correo" type="email" placeholder="" class="form-control input-md" required>
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="departamento">Password</label>  
            <div class="col-md-2">
            <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required> 
            </div>
          </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <input type="submit" id="registrar" class="btn btn-success" value="Aceptar">
      </div>
    </form>
    </div>
 </div>
 </div>
 <!-- /MODAL MODIFICAR USUARIO-->

<div id="eliminarUsuario" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Eliminar Usuario</h4>
      </div>
      <div class="modal-body">
        ¿Seguro que desea eliminar el usuario seleccionado?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="delete-u btn btn-danger" value="Eliminar">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 @stop