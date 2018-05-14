@extends('layouts.template')

@section('content')
	
	<div class="col-sm-12">
		<div class="form-group">
			@include('frament._info')
			<h1>Equipos</h1>
	        @include('frament._aside')
     	 </div>
	  </div>	
		<hr>
				<table class="table table-hover table-striped">
				  <thead class="thead-light">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nombre del Equipo</th>
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
				      <td>{{$articulo->n_bien}}</td>
				      <td>
				      	Marca: {{$articulo->marca}}<br>
				      	Modelo:{{$articulo->modelo}}<br> 
				      	Serial: {{$articulo->serial}}</td>
				      <td>{{$articulo->fec_adquisicion}}</td>
				      <td>
				    	<a href="{{ route('inventario_show_path', $articulo->id)}} >" class="btn btn-primary">&nbsp&nbspVer&nbsp&nbsp&nbsp&nbsp&nbsp</a>
				      </td>
				       <td>
				    	<a href="{{ route('inventario_edit_path', $articulo->id)}}" class="btn btn-primary" >Editar</a>
				      </td>
				      <td>
				      	<form action="{{ route('inventario_delete_path', $articulo->id) }}" method="POST">
				      	{{ csrf_field() }}
				      		<input type="hidden" name="_method" value="DELETE">
				      		<button class="btn btn-primary">Desincorporar</button>
				      	</form>
				      </td>
				    </tr>
			@endforeach
  				</tbody>
		</table>
		<div class="col-sm-8">
			{!! $bienes->render() !!}
		</div>
	</div>

@endsection()