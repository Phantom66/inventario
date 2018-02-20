@extends('layouts.app')

@section('content')

	Trabajando con Inventartrio

	<form class="form-inline" action="#">

	<hr>
	  <div class="form-group">
	    <label for="nombre">Nombres: </label>
	    <input type="nombre" class="form-control" id="nombre">
	  </div>
	  <div class="form-group">
	    <label for="apellido">Apellidos:</label>
	    <input type="text" class="form-control" id="apellido">
	  </div>
	  <div class="form-group">
	    <label for="fec_egreso">Fecha de Ingreso:</label>
	    <input type="date" class="form-control" id="fec_egreso">
	  </div>
	  <br><hr><b>Datos de la Unidad</b> <br>	
	  <div class="form-group">
	    <label for="nombre_unidad">Unidad:</label>
	    <input type="text" class="form-control" id="nombre_unidad">
	  </div>
	  <div class="form-group">
	    <label for="cod_ubi_admin">Codigo de Ubicacion Administrativa:</label>
	    <input type="text" class="form-control" id="cod_ubi_admin">
	  </div>
	  <div class="form-group">
	    <label for="ubi_geo">Ubicación Geográfica:</label>
	    <input type="text" class="form-control" id="ubi_geo">
	  </div>
	  <br><hr><b>Específicaciones del Equipo</b><br>
	  <div class="form-group">
	    <label for="nombre_equipo">Nombre del Equipo:</label>
	    <input type="text" class="form-control" id="nombre_equipo">
	  </div>
	  <div class="form-group">
	    <label for="marca">Marca:</label>
	    <input type="text" class="form-control" id="marca">
	  </div>
	  <div class="form-group">
	    <label for="Modelo">Modelo:</label>
	    <input type="text" class="form-control" id="Modelo">
	  </div>
	  <br><br>
	  <div class="form-group">
	    <label for="color">Color:</label>
	    <input type="text" class="form-control" id="color">
	  </div>
	  <div class="form-group">
	    <label for="serial">Serial:</label>
	    <input type="text" class="form-control" id="serial">
	  </div>
	  <div class="form-group">
	    <label for="fec_adquisicion">Fecha de Adquisición:</label>
	    <input type="date" class="form-control" id="fec_adquisicion">
	  </div>
	  <div class="form-group">
	    <label for="valor">Valor:</label>
	    <input type="text" class="form-control" id="valor">
	  </div>

	  <div class="form-group">
	    <div class="col-lg-offset-2 col-lg-10">
	      <button type="submit" class="btn btn-default">Entrar</button>
	    </div>
	  </div>

	  <br>
	  <br>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
@endsection()