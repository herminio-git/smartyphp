<?php 

    $alerta = "";

    if($_POST){
        $usuario = $_POST["login_usuario"];
        $senha   = $_POST["login_senha"];

        // $conexao =conectar();
        $sql = "SELECT * FROM tb_usuarios 
            WHERE db_usuario ='$usuario'
            AND db_senha = '$senha'";
        $result = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($result) > 0){
            $_SESSION["db_usuario"] = $usuario;
            echo "<script>alert
                    ('Usuário logado. Bem vindo! ".$usuario. "');
                    location.replace('index.php'); </script>";

        }else{
            $alerta = "<div class='alert-danger mb-3' role='alert'>
                <span class='fas fa-exclamation-triangle ml-2 mr-4 '>
                </span>
                Erro ao Logar! Usuário ou Senha incorreto.
                </div>";

        }    
    }

    $smarty->assign("alerta", $alerta);
    $smarty->display("login.tpl");
?>