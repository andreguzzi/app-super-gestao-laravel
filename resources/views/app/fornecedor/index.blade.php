<h3>fornecedor</h3>
{{-- nao afeta o array original --}}
@php

@endphp
@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)

        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if ($loop->first)
            Primeira iteração do Loop
        @endif

        @if ($loop->last)
            Ultima iteração do Loop

            <br>
            Total de registros: {{ $loop->count }}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrado !!!
    @endforelse
@endisset
