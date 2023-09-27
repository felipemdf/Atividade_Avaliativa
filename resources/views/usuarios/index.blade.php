@extends('base')

@section('content')
    <h1>Usuários</h1>

    @if (count($usuarios) > 0)
        <ul>
            @foreach ($usuarios as $usuario)
                <li>{{ $usuario->nome }} - {{ $usuario->idade }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum usuário encontrado.</p>
    @endif
@endsection
