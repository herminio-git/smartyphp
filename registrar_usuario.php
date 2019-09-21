<?php 

    conectar();

    $alerta = "";

    if($_POST){
        // recuperando dados do formulário "registrar_usuario.tpl"
        $nome_completo = $_POST["nome_completo"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $confirmar_senha = $_POST["confirmar_senha"];

        // $conexao =conectar();
        $sql = "SELECT * FROM tb_usuarios WHERE db_usuario='$usuario'";
        $result = mysqli_query($conexao, $sql);

        if($senha != $confirmar_senha){
            $alerta = "<div class='alert-danger' role='alert '>
                <span class='fas fa-exclamation-triangle ml-2 mr-4'>
                 Senhas diferentes !
                 </span></div>";
        }else if(mysqli_num_rows($result) > 0){
            $alerta = "<div class='alert-danger' role='alert '>
                <span class='fas fa-exclamation-triangle ml-2 mr-4'>
                 Usuário já existe !
                 </span></div>";
        }else{
            $sql_cadastra = "INSERT INTO tb_usuarios(
                db_nome_completo, db_usuario, db_senha, db_confirmar_senha)
                VALUES ('$nome_completo','$usuario','$senha','$confirmar_senha')";
                
                $cadastra = mysqli_query($conexao, $sql_cadastra);
                if($cadastra == ''){
                    $alerta = "<div class='alert-danger' role='alert '>
                    <span class='fas fa-exclamation-triangle ml-2 mr-4'>
                     Erro ao Cadastrar Usuário !
                     </span></div>";
                }else{
                    $alerta = "<div class='alert-success' role='alert '>
                    <span class='fas fa-check-circle ml-2 mr-4'>
                     Cadastrado Realizado com Sucesso !
                     </span></div>";
                }
        }
    }

    $smarty->assign("alerta", $alerta);
    $smarty->display("registrar_usuario.tpl");


?>