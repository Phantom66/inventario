@extends('layouts.tem')

@section('content')

	@include('frament._errors')
	
	<form class="" action="{{route('inventario_store_path') }}" method="POST">

		 {{ csrf_field() }}
	<div class="form-group">
		  	<div class="form-control-static">
				<strong>Datos de la Persona que Entrega</strong>	  		
	  		</div>
	  </div>
	  <div class="form-group">
	    <label for="nombre" class="control-label col-md-1">Nombres: </label>
		    <div class="col-md-5">  
		    	<input type="nombre" name="n_persona" class="form-control" id="nombre">	
		    </div>
	   </div>

	  <div class="form-group">
	    <label for="apellido" class="control-label col-md-1">Apellidos:</label>
	    <div class="col-md-5">
	    	<input type="text" name="apellido" class="form-control" id="apellido">
	    </div>

	  </div>

	  <div class="form-group">
	    <label for="fec_egreso" class="control-label col-md-5">Fecha de Ingreso:</label>
	    <div class="col-md-5">
	    	<input type="date" name="fec_egreso" class="form-control" id="fec_egreso">
	    </div>
	  </div>

	  <div class="form-group">
	  	<hr>
	  	<div class="form-control-static">
			<br><p><b>Descripción de la Unidad Inventariada</b></p>	  		
	  	</div>
	  </div>

	  <div class="form-group">
	    <label for="nombre_unidad" class="control-label col-md-8">Unidad:</label>
	    <div class="col-md-8">
	    	 <input type="text" name="n_unidad" class="form-control" id="nombre_unidad">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="cod_ubi_admin" class="control-label col-md-5">Cod. de Ubicación Administrativa:</label>
	    <div class="col-md-8">
	    	<input type="text" name="cod_ubi_admin" class="form-control" id="cod_ubi_admin">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="ubi_geo" class="control-label col-md-8">Ubicación Geográfica:</label>
	    <div class="col-md-8">
	    	<input type="text" name="ubi_geo" class="form-control" id="ubi_geo">
	    </div>
	  </div>

	  <div class="form-group">
	  	<hr>
	  	<div class="form-control-static">
			<br><p><b>Específicaciones del Equipo</b></p>	  		
	  	</div>
	  </div>

	  <div class="form-group">
	    <label for="nombre_equipo" class="control-label col-md-5">Nombre: </label>
	    <div class="col-md-5">
	    	<input type="text" name="n_bien" class="form-control" id="nombre_equipo">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="marca" class="control-label col-md-5">Marca:</label>
	    <div class="col-md-5">
	    	<input type="text" name="marca" class="form-control" id="marca">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="Modelo" class="control-label col-md-5">Modelo:</label>
	    <div class="col-md-5">
	    	<input type="text" name="modelo" class="form-control" id="Modelo">
	    </div>
	  </div>

	   	<div class="form-group">
		    <label for="descripcion" class="col-md-1">Estatus</label>
		   		<div class="col-md-5">
		    	<select class="form-control" name="estatus_id" id="descripcion">
				 	<option> Elige una opcion</option>
		 	 		@foreach($estatus as $estado)
				      <option value="{{ $estado->id}}">{{ $estado->descripcion}}</option>
				   @endforeach
		    	</div>
	   		</select>
	  </div>
	  <br>
	  <div class="form-group">
	    <label for="color" class="control-label col-md-1">Color:</label>
	    <div class="col-md-3">
	    	<input type="text" name="color" class="form-control" id="color">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="serial" class="control-label col-md-1">Serial:</label>
	    <div class="col-md-3">
	    	<input type="text" name="serial" class="form-control" id="serial">
	  </div>

	  <div class="form-group">
	    <label for="serial" class="control-label col-md-8">Codigo de Bien Nacional:</label>
	    <div class="col-md-3">
	    	<input type="text" name="cod_bien" class="form-control" id="serial">
	  </div>


	  </div>
	  	  <div class="form-group">
	  	<hr>
	  	<div class="form-control-static">
			<br>		
	  	</div>
	  </div>

	  <div class="form-group">
	    <label for="fec_adquisicion" class="control-label col-md-8">Fecha de Adquisición:</label>
	    <div class="col-md-3">
	    	<input type="date" name="fec_adquisicion" class="form-control" id="fec_adquisicion">
	    </div>
	    
	  </div>

	  <div class="form-group">
	    <label for="valor" class="control-label col-md-1">Valor:</label>
	    <div class="col-md-3">
	    	<input type="text" name="valor" class="form-control" id="valor">
	    </div>  
	  </div>

	  <div class="form-group">
	  	<div class="col-md-2">
	  		<button type="submit" class="btn btn-primary">Enviar</button>
	  	</div>
	  </div>	  
	</form>
	<br>
@endsection()