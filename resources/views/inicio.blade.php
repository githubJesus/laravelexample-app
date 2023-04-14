<h1 style="color:black" align="center">Mis coches</h1>

<table align="center">
    <tr>
        <td>
            <a href="{{ route('mail.inicio') }}">
                <button type="submit" style="background-color: greenyellow", style="font: bold">MANDAR CORREO</button>
            </a>
        </td>
    </tr>
</table>

<table border="1" align="center">
    <tr>
        <th style="color: red">ID</th>
        <th>Modelo</th>
        <th>Matrícula</th>
    </tr>

    <tbody>
        @foreach($coches as $coche)
        <tr>
            
            <td style="color: red" align="center">{{ $coche->id }}</td>
            <td style="color: green">{{ $coche->modelo }}</td>
            <td style="color: blue">{{ $coche->matricula }}</td>
            <td>
                <form action="{{ route('coches.showVista', $coche->id) }}" method="GET">
                    @csrf

                    <button type="submit" style="background-color: aquamarine">Mostrar</button>
                </form>
                <form action="{{ route('coches.updateVistaUno', $coche->id) }}" method="PUT">
                    @csrf
                    @method('PUT')
                    <button type="submit" style="background-color: yellow">Actualizar</button>
                </form>
                <form action="{{ route('coches.deleteVista', $coche->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color: red">Eliminar</button>
                </form>
            </td>
            
        </tr>
        @endforeach

    </tbody>
    

</table>
<table align="center">
    <tr>
        <td>
            <a href="{{ route('coches.storeuno') }}">
                <button type="submit" style="background-color: greenyellow", style="font: bold">AÑADIR COCHE</button>
            </a>
            <a href="{{ route('coches.propietarios') }}">
                <button type="submit" style="background-color: greenyellow", style="font: bold">VER PROPIETARIOS</button>
            </a>
        </td>
    </tr>
</table>


