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
    @foreach($games as $game)
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