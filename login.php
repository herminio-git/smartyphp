<?php 

    

    if($_POST){
        $usuario = $_POST["usuario_login"];
        $senha   = $_POST["senha_login"];

        // $conexao =conectar();
        $sql = "SELECT * FROM tb_usuarios 
            WHERE db_usuario ='$usuario'
            AND db_senha = '$senha'";
        $result = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($result) > 0){
            $_SESSION["db_usuario"] = $usuario;
            echo "<script>
                    alert
                    ('Usuário logado. Bem vindo ".$usuario. "');
                    location.replace('index.php');
                  </script>";

        }else{


        }    
    }

    $smarty->display("login.tpl");
?>