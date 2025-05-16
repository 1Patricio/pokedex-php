<form action="{{ url('pokemon/'.$pokemon->id)  }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value = "{{ $pokemon->name }}" placeholder="Nome" required>
    <input type="text" name="type" value = "{{ $pokemon->type }}" placeholder="Tipo" required>
    <input type="number" name="power" value = "{{ $pokemon->power }}" placeholder="Poder" required>
    <button type="submit">Criar Pokemon</button>
</form>