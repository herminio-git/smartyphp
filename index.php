<?php 

    include("includes/config.ini.php");

    $titulo = " Smarty e PHP7 ";

    $smarty->assign("titulo", $titulo);

   

    $smarty->display("cabecalho.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("rodape.tpl");
?>