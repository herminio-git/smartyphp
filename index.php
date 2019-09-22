<?php 
    session_start();
    include("includes/config.ini.php");

    $titulo = " Smarty e PHP7 ";


    

    $smarty->assign("titulo", $titulo);

   

    $smarty->display("cabecalho.tpl");
    $smarty->display("menu.tpl");

    if(isset($_GET["ac"]) && $_GET["ac"]== "registrar_usuario"){
        include ("registrar_usuario.php");

    }else if(!isset($_SESSION["usuario"])){
        include("login.php");
    }



    $smarty->display("rodape.tpl");
?>