<?php

require './Modelo/Pessoa.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css"/>
        
    </head>
    <body>
        
        <?php
        
        $callClass = new Pessoa();
         
        if(isset($_POST['cadastrar'])){
          $nome = $_POST['nome'];
          $idade = $_POST['idade'];
          $peso = $_POST['peso'];                      
        
        $callClass->inserir($nome, $idade, $peso);
        }
        
        ?>
        <form method="post">
            <h1>Tabela de Cadastro</h1>
            <table border="2px">
                <tr>
                    <th>Nome:</th>
                    <td>
                        <input name="nome" id="nome" class="campo" placeholder="insira seu nome aqui"> 
                    </td>
                </tr>
                <tr>
                    <th>Idade:</th>
                    <td>
                        <input name="idade" id="idade" class="campo" placeholder="insira sua idade aqui"> 
                    </td>
                </tr>
                <tr>
                    <th>Peso</th>
                    <td>
                        <input name="peso" id="peso" class="campo" placeholder="insira seu peso aqui"> 
                    </td>
                </tr>
            </table>
            <button type="submit" id="botao" name="cadastrar">OK</button>
        </form>
        <h3>Deseja Ver a lista de cadastrados?</h3>        
        <button id="botao" onclick="document.location='Cadastrados.php'">Lista</button>



    </body>
</html>
