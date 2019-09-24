<?php 

    $sql = "SELECT * FROM tb_funcionarios";
    $consultar = mysqli_query($conexao, $sql);
    $array_funcionario = array();

    while($linha_dados = mysqli_fetch_array($consultar)){

        $array_funcionario[] =  $linha_dados;
        
    }

  

    $smarty->assign("array_funcionario", $array_funcionario);
    $smarty->display("editar_funcionario.tpl");
?>