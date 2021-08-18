@extends('usuarios/layort')
        
@section('titulo', "lista de usuarios")

    @section('conteudo')  
        <h1>Todos os usuários</h1>
        <br><a href="{{route('usuario.create')}}">Novo usuário</a><br><br>
        
        @if(session('msg'))
            {{session('msg')}}<br><br>
        @endif
        
        @foreach($usuario as $usuario)    
          
         Id: {{$usuario->id}},
         Nome: {{$usuario->nome}} - 
        <a href='{{route('usuario.show', ['usuario'=>$usuario])}}'>Detalhes</a>
        <a href='{{route('usuario.edit', ['usuario'=>$usuario])}}'>Editar</a>
        <br>
        <form method="post" action="{{route('usuario.destroy', ['usuario'=>$usuario])}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Apagar"><br>
        </form>
        
        @endforeach
    @endsection
        
        
