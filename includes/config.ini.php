<?php 

    include("libs/smarty.class.php");

    $smarty = new smarty;

    function conectar(){
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "sistemasmarty";

        $conn = new mysqli($servidor, $usuario, $senha, $bd);

        return $conn;
    }
    
    $conexao =conectar();


?>