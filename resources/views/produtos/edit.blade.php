<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Alteralção do produto{{$produto->nome}}</h1>
        <form action="{{route('produto.update', ['produto'=>$produto])}}" method="POST" >
            @csrf
            @method('PATCH')
            Nome:
            <input type="text" name="nome" value="{{$produto->nome}}"><br>
            Quantidade:
            <input type="text" name="qtd" value="{{$produto->qtd}}"><br>
            Preço:
            <input type="text" name="preco" value="{{$produto->preco}}"><br>
            Foto:
            <input type="text" name="foto"value="{{$produto->foto}}"><br>
            <input type="submit" name="Salvar"><br>
        </form>
            
    </body>
</html>
