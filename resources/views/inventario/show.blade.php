@extends('layouts.app')

@section('content')



	<table class="table">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">Unidad Inventariada</th>
		    	 <td>{{$bienNacional->nombre}}</td>
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
		    	<th scope="col">Fecha de Adquisición</th>
		        <td>{{$bienNacional->fec_adquisicion}}</td>
		    </tr>
			<tr>
		    	<th scope="col">Persona Responsable de la Entrega:</th>
		        <td>{{$bienNacional->bienPersona->nombre}}</td>
		    </tr>
		  </thead>

	<table class="table">
@endsection()


		      
		      
		      <th></th><th></th><th></th>