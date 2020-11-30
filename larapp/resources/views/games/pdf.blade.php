<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de Juegos</title>
	<style>
		table {
			border: 1px solid #aaa;
			border-collapse: collapse;
		}
		table th, table td {
			font-family: sans-serif;
			font-size: 10px;
			border: 1px solid #ccc;
			padding: 4px;
		}
		table tr:nth-child(odd) {
			background-color: #eee;
		}
		table th {
			background-color: #666;
			color: #fff;
			text-align: center;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr> 
				<th>ID</th>
				<th>NOMBRE JUEGO</th>
				<th>DESCRIPCION</th>
				<th>USUARIO</th>
				<th>CATEGORIA</th>
				<th>DESTACADO</th>
				<th>PRECIO</th>
				<th>IMAGEN</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($games as $game)
			<tr>
			<td>{{ $game->id}}</td>
            <td>{{ $game->name}}</td>
            <td>{{ $game->description}}</td>
            <td>{{ $game->user->fullname}}</td>
            <td><img src="{{ public_path().'/'.$game->category->image }}" width="50px"></td>
            <td>{{ $game->slider}}</td>
            <td>{{ $game->price}}</td>
            <td><img src="{{ public_path().'/'.$game->image }}" width="50px"></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>