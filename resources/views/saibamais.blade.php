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
        <h1>{{$nome}}</h1>
        <h3>Endereço: {{$endereco}}</h3>
        <h3>Fundacao: {{$fundacao}}</h3>
        <h3>Telefone: {{$telefone}}</h3>
        <h3>Email: {{$email}}</h3>
        <h3>Area Atuação: {{$area}}</h3>
        <div align = "center" style="width: 1000px; height: 500px;">
            {!! Mapper::render() !!}
        </div>
    </body>
</html>
