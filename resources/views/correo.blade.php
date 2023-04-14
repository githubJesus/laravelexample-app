<form action="{{ route('sendMail') }}" method="POST" >
    @csrf
    <div class="form-group">
        <label for="name" style="color: blue">Nombre:</label><br>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email" style="color: blue">Correo electrónico:</label><br>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="subject" style="color: blue">Asunto:</label><br>
        <textarea name="subject" id="subject" class="form-control" rows="2" required></textarea>
    </div>
    <div class="form-group">
        <label for="message" style="color: blue">Mensaje:</label><br>
        <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" style="background-color: greenyellow; color: red">Enviar</button>
</form>