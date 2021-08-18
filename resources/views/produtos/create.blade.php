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
        <h1>Novo Produto</h1>
        <form method="post" action="{{route('produto.store')}}" >
            @csrf
            Nome:
            <input type="text" name="nome"><br>
            Quantidade:
            <input type="text" name="qtd"><br>
            Preço:
            <input type="text" name="preco"><br>
            Imagens:
            <input type="text" name="foto"><br>
            <input type="submit" name="Salvar"><br>
        </form>
            
    </body>
</html>
