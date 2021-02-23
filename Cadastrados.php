
<?php
require './Modelo/Pessoa.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" href="css/style.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src='js/jquery.mask.js' ></script>
    </head>
    <body>


        <h1>Lista dos Usuarios Cadastrados</h1>
        <table border="5"  width=300 height=100 align=center>
            <thead>
                <tr id="tabela">
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>peso</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $callClass = new Pessoa();
                $nome = $_GET['nome'];
                $idade = $_GET['idade'];
                $peso = $_GET['peso'];
                $usuario = $callClass->ler();
                
                foreach ($usuario as $u) {
                    
                }
                
                ?>

                <tr id="linhas">
                    <td>
                        <?= $usuario['nome'] ?>
                    </td>
                    <td>ola2</td>
                    <td>ola3</td>
                    <td>ola4</td>
                </tr>



            </tbody>



        </table>







    </body>
</html>

