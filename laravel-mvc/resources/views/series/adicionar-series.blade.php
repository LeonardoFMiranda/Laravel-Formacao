<x-layout title="Adicionar série">
    <form action="{{route('series.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome da série:</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <button class="btn btn-primary mt-2" >Adicionar</button>
    </form>
    <a href="/series" class="btn btn-secondary mt-2">Voltar</a>
</x-layout>
