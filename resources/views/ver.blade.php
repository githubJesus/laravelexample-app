<h1 style="color: red">Información del coche</h1>

<ul>
    <li><strong>ID:</strong> {{ $coche->id }}</li>
    <li><strong>Modelo:</strong> {{ $coche->modelo }}</li>
    <li><strong>Matrícula:</strong> {{ $coche->matricula }}</li>
</ul>

<form action="{{ route('coches.indexVista', $coche->id) }}" method="GET">
    @csrf
    @method('GET')
    <button type="submit">Volver</button>
</form>
