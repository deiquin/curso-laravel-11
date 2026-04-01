<form method="POST"
      action="{{ isset($mensaje) ? route('mensajes.update',$mensaje) : route('mensajes.store') }}">
    @csrf
    @isset($mensaje)
        @method('PUT')
    @endisset

    <input name="titulo" value="{{ $mensaje->titulo ?? '' }}">
    <textarea name="contenido">{{ $mensaje->contenido ?? '' }}</textarea>
    @if(!isset($noMostrarBoton))
        <button>Guardar</button>
    @endif
</form>