

@vite(['resources/js/app.js'])

<a href="{{ route('mensajes.create') }}">Nuevo Mensaje</a>

@foreach($mensajes as $mensaje)
    <h3>{{ $mensaje->titulo }}</h3>
    <a href="{{ route('mensajes.show', $mensaje) }}">Mostrar</a>
    <a href="{{ route('mensajes.edit', $mensaje) }}">Editar</a>

    <form method="POST" action="{{ route('mensajes.destroy', $mensaje) }}">
        @csrf
        @method('DELETE')
        <button>Eliminar</button>
    </form>
@endforeach

{{ $mensajes->links() }}
