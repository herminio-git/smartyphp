<?php 

    include("includes/config.ini.php");

    $minha_var = "Olá mundo, com Smarty e PHP7!!";

    $smarty->assign("minha_var", $minha_var);

    $array = array();
    $array[0]["nome"] = "Hugo";
    $array[0]["sobrenome"] = "Vasconcelos";
    $array[1]["nome"] = "Paula";
    $array[1]["sobrenome"] = "Cordeiro";
    $array[2]["nome"] = "Fábio";
    $array[2]["sobrenome"] = "Rodrigues";

    $smarty->assign("array", $array);

    $smarty->assign(array(
        'var1'=>'Bem vindos!!!!', 
        'var2'=>'Curso de Smarty!!!!', 
        'var3'=>'Professor Hugo Freitas !!!!')
    );





    $smarty->display("teste.php");
?>