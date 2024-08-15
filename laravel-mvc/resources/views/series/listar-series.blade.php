<x-layout title="Lista de séries">
    <a href="/series/adicionar-series" class="btn btn-dark mb-2">Adicionar séries</a>
    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item">{{$serie}}</li>
        @endforeach
    </ul>
</x-layout>