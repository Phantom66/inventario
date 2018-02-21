@extends('layouts.app')

@section('content')
	
	<div class="col-sm-10">

	<div class="form-group">

		<div class="form-control-static">
			<h2>Listado</h2>  <a href="{{ route('inventario_create_path')}}" class="btn btn-default pull-right">Crear</a>	
	  	</div>
	  </div>
	

			
				<table class="table">
				  <thead class="thead-light">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Unidad Inventariada</th>
				      <th scope="col">Especificaiones del Equipo</th>
				      <th scope="col">Fecha de Adquisición</th>
				      <th></th><th></th><th></th>
				    </tr>
				  </thead>
				  @foreach($bienes as $articulo)
				  <tbody>
				    <tr>
				      <th scope="row">
				      		{{$articulo->id}}
				      	</a>
				      </th>
				      <td>{{$articulo->nombre}}</td>
				      <td>
				      	Marca: {{$articulo->marca}}<br>
				      	Modelo:{{$articulo->modelo}}<br> 
				      	Serial: {{$articulo->serial}}</td>
				      <td>{{$articulo->fec_adquisicion}}</td>
				      <td>
				    	<a href="{{ route('inventario_path', $articulo->id)}} >" class="btn btn-primary">&nbsp&nbspVer&nbsp&nbsp&nbsp&nbsp&nbsp</a>
				      </td>
				       <td>
				    	<a href="#" class="btn btn-primary" >Actualizar</a>
				      </td>
				      <td>
				    	<a href="#" class="btn btn-primary">Desincorporar</a>
				      </td>
				    </tr>
			@endforeach
  				</tbody>
		</table>
	</div>

		{!! $bienes->render() !!}

	

@endsection()