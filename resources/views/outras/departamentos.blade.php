@extends('layouts.principal')
@section('titulo', 'Departamentos')
@section('conteudo')
<h3>Departamentos</h3>
<ul>

<li>Computadores</li>
<li>Eletronicos</li>
<li>Acessórios</li>
<li>Roupas</li>
   
</ul>
@alert(['titulo'=>'Info','tipo'=>'info'])
    <p><strong>Erro inesperado<strong></p>
    <p>Ocorreu um erro inesperado</p>
@endalert

@alert(['titulo'=>'Erro Fatal','tipo'=>'error'])
    <p><strong>Erro inesperado<strong></p>
    <p>Ocorreu um erro inesperado</p>
@endalert

@alert(['titulo'=>'Success','tipo'=>'success'])
    <p><strong>Erro inesperado<strong></p>
    <p>Ocorreu um erro inesperado</p>
@endalert

@alert(['titulo'=>'Warning','tipo'=>'warning'])
    <p><strong>Erro inesperado<strong></p>
    <p>Ocorreu um erro inesperado</p>
@endalert

@endsection