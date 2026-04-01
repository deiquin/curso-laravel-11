@vite(['resources/js/app.js'])

<a href="{{ route('posts.create') }}">Nuevo Post</a>

<div class="container mt-4">
    <div class="row">
        <table>
            <thead>
                <th>Título</th>
                <th>Contenido</th>
                <th>Editar</th>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>
                    {{ $post->title }}
                    </td>
                    <td>
                    {{ $post->content }}
                    </td>
                    <td>
                        <a href="{{ route('posts.edit', $post) }}">Editar</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('posts.destroy', $post) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody> 
        </table> 
    </div>
        
    <div class="row mt-5">
        <ul class="pagination">
            {{ $posts->links() }}
        </ul>
    </div>
</div>



<!-- @foreach ($posts as $post)
    <h6>{{ $post->title }}</h6>
    <a href="{{ route('posts.edit', $post) }}">Editar</a>

    <form method="POST" action="{{ route('posts.destroy', $post) }}">
        @csrf
        @method('DELETE')
        <button>Eliminar</button>
    </form>
@endforeach -->
<!-- 
<div class="container mt-4">
    <ul class="pagination">
        {{ $posts->links() }}
    </ul>
</div> -->