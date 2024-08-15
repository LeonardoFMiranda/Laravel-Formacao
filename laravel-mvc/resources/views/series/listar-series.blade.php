<x-layout title="Lista de séries">
    <a href="/series/adicionar-series">Adicionar séries</a>
    <ul>
        @foreach ($series as $serie)
        <li>{{$serie}}</li>
        @endforeach
    </ul>
</x-layout>