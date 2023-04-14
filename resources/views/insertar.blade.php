<h1>Añadir coche</h1>

<form method="POST" action="{{ route('coches.storeVista') }}">
    @csrf
    <label for="modelo">Modelo:</label>
    <input type="text" id="modelo" name="modelo" required>

    <label for="matricula">Matrícula:</label>
    <input type="text" id="matricula" name="matricula" required>

    <button type="submit">Añadir coche</button>
</form>

