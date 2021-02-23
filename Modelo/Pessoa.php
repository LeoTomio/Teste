<?php

require 'Conexao.php';


class Pessoa extends Conexao {

    public function __construct() {
        $this->conexao = Conexao::conexao();
    }

    public function inserir($nome, $idade, $peso) {

        $sql = "INSERT INTO usuario (nome, idade, peso) VALUES (?, ?, ?);";
        $c = self::conexao()->prepare($sql);
        $c->bindValue(1, $nome);
        $c->bindValue(2, $idade);
        $c->bindValue(3, $peso);


        $c->execute();
    }
    
    public function ler() {
        $sql = "SELECT * FROM usuario;";
        $c = self::conexao()->query($sql);
        $reposta = $c->fetchALL(PDO::FETCH_ASSOC);
        return $reposta;
        
    }
    
    public function alterar($nome,$idade,$peso,$codigo) {
        $sql = "UPDATE usuario set nome=?, idade=?, peso=? where codigo=?;";
        $c = self::conexao()->prepare($sql);
        $c->bindValue(1,$nome);
        $c->bindValue(2,$idade);
        $c->bindValue(3,$peso);
        $c->bindValue(4,$codigo);
        
        $c->execute();
        
    }
    
    public function deletar($codigo) {
        $sql = "DELETE from usuario where codigo=?;";
        $c = self::conexao()->prepare($sql);
        $c->bindValue(1,$codigo);
        $c->execute();
        
    }

}
