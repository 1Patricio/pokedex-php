@foreach($pokemon as $entidade)
    <div>
        <h3>{{ $entidade->name }}</h3>
        <p>{{ $entidade->type }}</p>
        <p>{{ $entidade->power }}</p>
        <a href="{{ url('pokemon/'.$entidade->id.'/edit') }}">Editar</a>
        <form action="{{ url('pokemon/'.$entidade->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </div>
@endforeach