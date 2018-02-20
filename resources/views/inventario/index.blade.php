@extends('layouts.app')

@section('content')

	
	

	@foreach($bienes as $articulo)
	Usuario: {{ $articulo->bienUser->name }}


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
		      	<a href="{{ route('inventario_path', ['bien' => $articulo->id])}}">
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
		    	<a href="{{route ('inventario_create_path')}}">Editar</a>
		      </td>
		       <td>
		    	<a href="#">Actualizar</a>
		      </td>
		      <td>
		    	<a href="#">Desincorporar</a>
		      </td>
		    </tr>



  	</tbody>
</table>
	@endforeach

	

@endsection()