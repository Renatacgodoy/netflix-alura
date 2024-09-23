<x-layout title="Temporada de '{{ $series->nome}}'">

    <ul class='list-group'>
        @foreach ($seasons as $season)
            <li class='list-group-item d-flex justify-content-between align-itens-center'> 
                Temporada   {{ $season->number }} 
            

                <span class= "badge bd-secondary">
                {{ $season->episodes->count() }}
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>