@extends('layouts.principal')
@section('titulo', 'Clientes -edit')
@section('conteudo')

<h3>Editar Cliente</h3>

<form action="{{route('clientes.update', $cliente['id'])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{$cliente['nome']}}">
    <input type="submit" class="btn" value="SALVAR">
</form>


@endsection