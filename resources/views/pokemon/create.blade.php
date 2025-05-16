<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome" required>
    <input type="text" name="type" placeholder="Tipo" required>
    <input type="number" name="power" placeholder="Poder" required>
    <button type="submit">Criar Pokemon</button>
</form>