<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
	<body>
	<div class="">
		<div class="col-sm-12">
			<table class="table">
				<tbody>
					<tr>
						<tdcolspan="3">&nbsp;<h1>Reporte</h1></td>
					</tr>
					<tr>
						<td >&nbsp;<strong>Unidad Inventariada</strong></td>
						<td >&nbsp;<strong>Codigo de Ubicacion Administrativa</strong></td>
						<td >&nbsp;<strong>Ubicaccion Geografica</strong></td>
					</tr>
					<tr>
						<td >&nbsp;{{$bienNacional->bienUnidad->n_unidad}}</td>
						<td >&nbsp;{{$bienNacional->bienUnidad->cod_ubi_admin}}</td>
						<td >&nbsp;{{$bienNacional->bienUnidad->ubi_geo}}</td>
					</tr>
					<tr>
						<td>&nbsp;<strong>Especificaiones del Equipo</strong></td>
						<td>&nbsp;<strong>Estado del Equipo</strong></td>
						<td>&nbsp;<strong>Fecha de Adquisición</strong></td>
					</tr>
					<tr>
						<td>&nbsp;			      	
							Marca: {{$bienNacional->marca}}<br>
				      		Modelo:{{$bienNacional->modelo}}<br> 
				      		Serial: {{$bienNacional->serial}}</td>
						<td>&nbsp;{{$bienNacional->bienEstatus->descripcion}}</td>
						<td>&nbsp;{{$bienNacional->fec_adquisicion}}</td>
					</tr>
					<tr>
						<td>&nbsp;<strong>Persona Responsable de la Entrega</strong></td>
						<td>&nbsp;<strong>Persona Responsable Quien Recibe</strong></td>
					</tr>
					<tr>
						<td>&nbsp;{{$bienNacional->bienPersona->n_persona}} {{$bienNacional->bienPersona->apellido}}</td>
						<td>&nbsp;{{$bienNacional->bienUser->name}} </td>	
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	</body>
</html>