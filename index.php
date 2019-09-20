<?php 

    include("includes/config.ini.php");

    $titulo = " Smarty e PHP7 ";


    

    $smarty->assign("titulo", $titulo);

   

    $smarty->display("cabecalho.tpl");
    $smarty->display("menu.tpl");
    if($_GET["ac"] && $_GET["ac"]== "registrar_usuario"){
        include ("registrar_usuario.php");
    }
    $smarty->display("rodape.tpl");
?>