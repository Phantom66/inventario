<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
</head>
	<body>
		<h4 align="center">
			Repúblic Bolivaria de Venezuela <br>
			Universidad Nacional Experimental Simón Rodríguez <br>(UNESR) <br>
			Dirección de Serguridad Universitaria <br>División de Operaciones<br>
			Control de Ruta de Materiales y Equipos Universitarios
		</h4>
		<p align="center">
			<b>EQUIPO INVENTARIADO
		</p>
		<hr>
		<br><br><br>
		<table border="1" align="center">
			<tbody>
				<tr>
					<th>&nbsp;<strong>Unidad Inventariada</strong></th>
					<th>&nbsp;<strong>Codigo de Ubicacion Administrativa</strong></th>
					<th>&nbsp;<strong>Ubicaccion Geografica</strong></th>
				</tr>
				<tr>
					<td>&nbsp;{{$bienNacional->bienUnidad->n_unidad}}</td>
					<td>&nbsp;{{$bienNacional->bienUnidad->cod_ubi_admin}}</td>
					<td>&nbsp;{{$bienNacional->bienUnidad->ubi_geo}}</td>
				</tr>
				<tr>
					<th>&nbsp;<strong>Especificaiones del Equipo</strong></th>
					<th>&nbsp;<strong>Estado del Equipo</strong></th>
					<th>&nbsp;<strong>Fecha de Adquisición</strong></th>
				</tr>
				<tr>
					<td>&nbsp;Marca: {{$bienNacional->marca}}<br>
						&nbsp;Modelo: {{$bienNacional->modelo}}<br> 
				  		&nbsp;Serial: {{$bienNacional->serial}}</td>
					<td>&nbsp;{{$bienNacional->bienEstatus->descripcion}}</td>
					<td>&nbsp;{{$bienNacional->fec_adquisicion}}</td>
				</tr>
				<tr>
					<th>&nbsp;<strong>Responsable de la Entrega</strong></th>
					<th>&nbsp;<strong>Responsable Quien Recibe</strong></th>
				</tr>
				<tr>
					<td>&nbsp;{{$bienNacional->bienPersona->n_persona}} {{$bienNacional->bienPersona->apellido}}</td>
					<td>&nbsp;{{$bienNacional->bienUser->name}} </td>	
				</tr>
				</tbody>
			</table>
			<br><br><br>
			<hr> 
	</body>
</html>