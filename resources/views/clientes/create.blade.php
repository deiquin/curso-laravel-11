    
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form method="POST" 
    action="{{ isset($cliente) ? route('clientes.update', $cliente) : route('clientes.store')  }}">
    @csrf
    @if (isset($cliente))
        @method('PUT')
    @endif

    <input name="nombre" placeholder="Nombre" value="{{ old('nombre', $cliente->nombre ?? '') }}">
    <input name="email" placeholder="Email" value="{{ old('email', $cliente->email ?? '') }}">

    <label>
        <input type="checkbox" name="esadmin" value="1" @checked(old('esadmin', $cliente->esadmin))>
        Es admin
    </label>
    @if (!isset($noMostrarBoton))
        <button type="submit">Guardar</button>
    @endif
</form>
