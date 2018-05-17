@extends('layouts.template')

@section('content')
	<div class="col-md-8">
		<table class="table">
			    <tr>
			      <th scope="col">Unidad Inventariada</th>
			    	 <td>{{$bienNacional->bienUnidad->n_unidad}}</td>
			    </tr>
			     <tr>
			      <th scope="col">Codigo de Ubicacion Administrativa</th>
			    	 <td>{{$bienNacional->bienUnidad->cod_ubi_admin}}</td>
			    </tr>
			     <tr>
			      <th scope="col">Ubicaccion Geografica</th>
			    	 <td>{{$bienNacional->bienUnidad->ubi_geo}}</td>
			    </tr>
			    <tr>
			    	<th scope="col">Especificaiones del Equipo</th>
			    	<td>
			      	Marca: {{$bienNacional->marca}}<br>
			      	Modelo:{{$bienNacional->modelo}}<br> 
			      	Serial: {{$bienNacional->serial}}
			      </td>
			    </tr>
			    <tr>
			    	<th scope="col">Estado del Equipo</th>
			    	<td>{{$bienNacional->bienEstatus->descripcion}}</td>
			    </tr>
			    <tr>
			    	<th scope="col">Fecha de Adquisición</th>
			        <td>{{$bienNacional->fec_adquisicion}}</td>
			    </tr>
				<tr>
			    	<th scope="col">Persona Responsable de la Entrega</th>
			        <td>
			        	{{$bienNacional->bienPersona->n_persona}} {{$bienNacional->bienPersona->apellido}}
			        </td>
			    </tr>
			    <tr>
			    	<th scope="col">Persona Responsable Quien Recibe</th>
			        <td>
			        	{{$bienNacional->bienUser->name}} 
			     </td>

			     <td>
			     	<a href="{{route('inventario_pdf_path', $bienNacional->id)}}" class="btn btn-primary">Descargar</a>
			     </td>
			    </tr>
			</table>
		</div>
	<br><br><br>
@endsection()


