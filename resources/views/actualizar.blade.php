<h1 style="color: red">Editar coche</h1>

<form action="{{ route('coches.updateVistaDos', $coche->id) }}" method="PUT">
    @csrf
    @method('PUT')
    <div>
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" value="{{ $coche->modelo }}" required>
    </div>
    <div>
        <label for="matricula">Matrícula:</label>
        <input type="text" name="matricula" value="{{ $coche->matricula }}" required>
    </div>
    <button type="submit">Guardar cambios</button>
</form>

