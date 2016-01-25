@extends('plantillas.dashboard')

@section('titulo')
  Anadir Asistencia del Personal
@stop

@section('miga')
  Anadir Asistencia
@stop

@section('content')
<br><br>

<form class="form-horizontal">

<div id="exitoasistencia" class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Aviso</strong> Se ha anadido correctamente la asistencia.
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ficha">Ficha del Empleado</label>  
  <div class="col-md-2">
  <input id="ficha" name="ficha" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fecha">Fecha</label>  
  <div class="col-md-2">
  <input id="fecha" name="fecha" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="horaini">Hora de llegada</label>  
  <div class="col-md-2">
  <input id="horaini" name="horaini" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="horafin">Hora de Salida</label>  
  <div class="col-md-2">
  <input id="horafin" name="horafin" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="observacion">Observacion</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="observacion" name="observacion"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="anadir"></label>
  <div class="col-md-4">
    <input type="button" data-toggle="alert" data-target="#exitoasistencia" id="anadir" name="anadir" class="btn btn-success" value="Anadir"></input>
  </div>
</div>

</form>

@stop
@section('modal')



@stop