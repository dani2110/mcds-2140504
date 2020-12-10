@forelse($categories as $category)
<tr>
    <td>{{ $category->name }}</td>
    <td>{{ $category->game->name }}</td>
    <td class="d-none d-sm-table-cell">
        <img src="{{ asset($category->image) }}" width="36px">
    </td>
    <td><img src="{{ asset($category->game->image) }}" width="36px"></td>
</tr>
@empty
<tr>
    <td class="text-center" colspan="5">
        No hay juegos en esta categoria.
    </td>
</tr>
@endforelse