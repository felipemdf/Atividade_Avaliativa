<x-base alias='titulo e descricao' />

@if (count($items) > 0)
    <ul>
        @foreach ($items as $item)
            {{-- Se o item for sabão, colocar em caixa alta --}}
            <li>{{ $item->name == 'sabão' ? strtoupper($item->name) : strtolower($item->name) }} -
                {{ $item->description }}</li>
        @endforeach
    </ul>
@else
    <p>Nenhum item encontrado.</p>
@endif
