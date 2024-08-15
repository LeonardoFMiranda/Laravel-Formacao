<x-layout title="Lista de séries">
    <a href="/series/adicionar-series" class="btn btn-dark mb-2">Adicionar séries</a>
    @empty($series)
        <div class="alert alert-warning" role="alert">
            Nenhuma série adicionada ainda. <a href="/series/adicionar-series">Adicione uma série agora</a>.
        </div>
    @else
        <ul class="list-group">
            @foreach ($series as $serie)
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <span>{{ $serie->nome }}</span>
                    <form action="{{ route('series.destroy', $serie->id) }}" method='post'>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endempty
</x-layout>
