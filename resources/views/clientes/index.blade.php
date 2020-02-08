@extends('layouts.principal')
@section('titulo', 'Clientes')

@section('conteudo')

<h3>{{$titulo}}</h3>
<a href="{{route('clientes.create')}}">NEW</a>
@if (count($clientes)>0)

<ul>
    @foreach ($clientes as $c)
<li>
    {{ $c['id']}} | {{ $c['nome']}} |
     <a href="{{route('clientes.edit',$c['id'])}}">EDIT</a>
     <a href="{{route('clientes.show',$c['id'])}}">INFO</a>
     <form action="{{route('clientes.update', $c['id'])}}" method="POST">
        @csrf
        @method('DELETE')
        
        <input type="submit" class="btn" value="DELETE">
    </form>
    @endforeach
</ul>

<hr>
@for($i=0;$i<10;$i++)
 {{$i}},
@endfor
<hr>
@for($i=0;$i<count($clientes);$i++)
 {{$clientes[$i]['nome']}},
@endfor
<hr>
@foreach ($clientes as $c)
   <p>{{$c['nome']}} |
    @if($loop->first)
        (primeiro) |
    @endif
    @if($loop->last)
        (ultimo) |
    @endif
    ({{$loop->index}}) - {{$loop->iteration}} / {{$loop->count}}
    </p>
@endforeach

@else
<h4>Não existem clientes cadastrados</h4>
@endif

@empty($clintes)
<h4>Não existem clientes cadastrados</h4>
@endempty

@endsection