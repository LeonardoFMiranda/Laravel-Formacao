<x-layout title="Adicionar série">
    <form method="post">
        @csrf
        <label for="nome">Nome da série:</label>
        <input type="text" name="nome" id="nome" class="form-control">
        <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
    <a href="/series" class="btn btn-secondary mt-2">Voltar</a>
</x-layout>