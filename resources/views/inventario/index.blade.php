@extends('layouts.app')

@section('content')
	
	<div class="col-sm-10">
	
	<h2>Listado</h2>
			@foreach($bienes as $articulo)

			     <p > <b>Usuario:</b> {{ $articulo->bienUser->name }}</p>	


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
				  <tbody>
				    <tr>
				      <th scope="row">
				      	<a href="{{ route('inventario_path', ['bien' => $articulo->id])}}" >
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
				    	<a href="{{route ('inventario_create_path')}}" class="btn btn-primary">Editar</a>
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