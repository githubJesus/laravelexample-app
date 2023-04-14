{{-- @foreach ($usuarios as $usuario)
    <h2>{{ $usuario->nombre }}</h2>
    <ul>
        @foreach ($usuario->coches as $coche)
            <li>{{ $coche->modelo }} ({{ $coche->matricula }})</li>
        @endforeach
    </ul>
@endforeach --}}


{{-- <table>
    <thead>
        <tr>
            <th>Propietario</th>
            <th>Modelo</th>
            <th>Matrícula</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            @foreach ($usuario->coches as $coche)
                <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $coche->modelo }}</td>
                    <td>{{ $coche->matricula }}</td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table> --}}
<h1 style="color: cadetblue" align="center">Lista de propietarios</h1>
@if ($usuarios->isNotEmpty())
<table border="1" align="center">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Coches</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->dni }}</td>
                <td>
                    @if ($usuario->coches->isNotEmpty())
                        <ul>
                            @foreach ($usuario->coches as $coche)
                                <li>{{ $coche->modelo }} ({{ $coche->matricula }})</li>
                            @endforeach
                        </ul>
                    @else
                        <ul style="background-color: red">
                            <p>Sin coches</p>
                        </ul>
                        
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
<p>No hay usuarios</p>
@endif