@extends('layouts.principal')
@section('titulo', 'Options')
@section('conteudo')

<div>
    <ul class="options">
    <li><a class="warning"  href="{{route('options',1)}}">Warning</a></li>
        <li><a class="info"     href="{{route('options',2)}}">Info</a></li>
        <li><a class="success"  href="{{route('options',3)}}">Success</a></li>
        <li><a class="error"    href="{{route('options',4)}}">Error</a></li>
    </ul>
</div>

@if(isset($option))

    @switch($option)
        @case(1)
                @alert(['titulo'=>'Warning','tipo'=>'warning'])
                <p><strong>Erro inesperado<strong></p>
                <p>Ocorreu um erro inesperado</p>
                @endalert
            @break
        @case(2)
                @alert(['titulo'=>'Info','tipo'=>'info'])
                <p><strong>Erro inesperado<strong></p>
                <p>Ocorreu um erro inesperado</p>
                @endalert
            @break
        @case(3)
                @alert(['titulo'=>'Success','tipo'=>'success'])
                <p><strong>Erro inesperado<strong></p>
                <p>Ocorreu um erro inesperado</p>
                @endalert
            @break
        @case(4)
                @alert(['titulo'=>'Erro Fatal','tipo'=>'error'])
                <p><strong>Erro inesperado<strong></p>
                <p>Ocorreu um erro inesperado</p>
                @endalert
            @break
    @endswitch

@endif

@endsection