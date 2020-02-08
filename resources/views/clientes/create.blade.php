@extends('layouts.principal')
@section('titulo', 'Clientes - insert')
@section('conteudo')

<h3>Novo Cliente</h3>

<form action="{{route('clientes.store')}}" method="POST">
    @csrf
    <input type="text" name="nome">
    <input type="submit" class="btn" value="SALVAR">
</form>



@endsection