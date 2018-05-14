@extends('layouts.template')

@section('content')

@include('frament._errors')

<form class="" action="{{route('inventario_update_path', $bienNacional->bienPersona->id )}}" method="POST">

		{{  method_field('PUT') }}
		 {{ csrf_field() }}

	
	<div class="form-group">
		  	<div class="form-control-static">
				<strong>Datos de la Persona que Entrega</strong>	  		
	  		</div>
	  </div>
	  <div class="form-group">
	    <label for="nombre" class="control-label col-md-1">Nombres: </label>
	    <div class="col-md-3">  
	    	<input type="text" name="n_persona" class="form-control" id="nombre" value="{{$bienNacional->bienPersona->n_persona}}">	
	    </div>
	   </div>

	  <div class="form-group">
	    <label for="apellido" class="control-label col-md-1">Apellidos:</label>
	    <div class="col-md-3">
	    	<input type="text" name="apellido" class="form-control" id="apellido" value="{{$bienNacional->bienPersona->apellido}}">
	    </div>

	  </div>

	  <div class="form-group">
	    <label for="fec_egreso" class="control-label col-md-1">Fecha de Ingreso:</label>
	    <div class="col-md-3">
	    	<input type="date" name="fec_egreso" class="form-control" id="fec_egreso" value="{{$bienNacional->bienPersona->fec_egreso}}">
	    </div>
	  </div>

	  <div class="form-group">
	  	<hr>
	  	<div class="form-control-static">
			<br><p><b>Descripción de la Unidad Inventariada</b></p>	  		
	  	</div>
	  </div>

	  <div class="form-group">
	    <label for="nombre_unidad" class="control-label col-md-1">Unidad:</label>
	    <div class="col-md-3">
	    	 <input type="text" name="n_unidad" class="form-control" id="nombre_unidad" value="{{$bienNacional->bienUnidad->n_unidad }}">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="cod_ubi_admin" class="control-label col-md-1">Cod.Ubi.Admin.:</label>
	    <div class="col-md-3">
	    	<input type="text" name="cod_ubi_admin" class="form-control" id="cod_ubi_admin" value="{{$bienNacional->bienUnidad->cod_ubi_admin }}">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="ubi_geo" class="control-label col-md-1">Ubicación Geográfica:</label>
	    <div class="col-md-3">
	    	<input type="text" name="ubi_geo" class="form-control" id="ubi_geo" value="{{$bienNacional->bienUnidad->ubi_geo }}">
	    </div>
	  </div>

	  <div class="form-group">
	  	<hr>
	  	<div class="form-control-static">
			<br><p><b>Específicaciones del Equipo</b></p>	  		
	  	</div>
	  </div>

	  <div class="form-group">
	    <label for="nombre_equipo" class="control-label col-md-1">Nombre: </label>
	    <div class="col-md-2">
	    	<input type="text" name="n_bien" class="form-control" id="nombre_equipo" value="{{$bienNacional->n_bien }}">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="marca" class="control-label col-md-1">Marca:</label>
	    <div class="col-md-2">
	    	<input type="text" name="marca" class="form-control" id="marca" value="{{$bienNacional->marca }}">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="Modelo" class="control-label col-md-1">Modelo:</label>
	    <div class="col-md-2">
	    	<input type="text" name="modelo" class="form-control" id="Modelo" value="{{$bienNacional->modelo }}">
	    </div>
	  </div>

	   	<div class="form-group">
		    <label for="descripcion" class="col-md-1">Estatus</label>
		   		<div class="col-md-2">
			    	<select class="form-control" name="estatus_id" id="descripcion">
						@foreach($estatus as $estado)

						@if($estado->id == $bienNacional->estatus_bien_id){
						<option value="{{ $estado->id}}" selected>{{ $estado->descripcion}}</option>
						}@else{
							<option value="{{ $estado->id}}">{{ $estado->descripcion}}</option>
						}@endif


					   @endforeach
				   	</select>
		    	</div>
	  </div>
	  <div class="form-group">
	  	<hr>
	  	<div class="form-control-static">
			<br>		
	  	</div>
	  </div>

	  <div class="form-group">
	    <label for="color" class="control-label col-md-1">Color:</label>
	    <div class="col-md-3">
	    	<input type="text" name="color" class="form-control" id="color" value="{{$bienNacional->color }}">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="serial" class="control-label col-md-1">Serial:</label>
	    <div class="col-md-3">
	    	<input type="text" name="serial" class="form-control" id="serial" value="{{$bienNacional->serial }}">
	  </div>

	  <div class="form-group">
	    <label for="cod_bien" class="control-label col-md-1">Codigo bien:</label>
	    <div class="col-md-3">
	    	<input type="text" name="cod_bien" class="form-control" id="cod_bien" value="{{$bienNacional->cod_bien }}">
	  </div>


	  </div>
	  	  <div class="form-group">
	  	<hr>
	  	<div class="form-control-static">
			<br>		
	  	</div>
	  </div>

	  <div class="form-group">
	    <label for="fec_adquisicion" class="control-label col-md-2">Fecha de Adquisición:</label>
	    <div class="col-md-3">
	    	<input type="date" name="fec_adquisicion" class="form-control" id="fec_adquisicion" value="{{$bienNacional->fec_adquisicion }}">
	    </div>
	    
	  </div>

	  <div class="form-group">
	    <label for="valor" class="control-label col-md-1">Valor:</label>
	    <div class="col-md-3">
	    	<input type="text" name="valor" class="form-control" id="valor" value="{{$bienNacional->valor }}">
	    </div>  
	  </div>

	  <div class="form-group">
	  	<div class="col-md-2">
	  		<button type="submit" class="btn btn-primary">Enviar</button>
	  	</div>
	  </div>	  
	</form>

@endsection