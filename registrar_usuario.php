<?php 

$alerta = "";

if($_POST){
	$nome_completo = $_POST["rg_nome_completo"];
	$usuario = $_POST["rg_usuario"];
	$senha = $_POST["rg_senha"];
	$confirmar_senha = $_POST["rg_confirmar_senha"];

	$conexao = conectar();
    $sql = "SELECT * FROM tb_usuarios WHERE db_usuario='$usuario'";
    
	$result = mysqli_query($conexao, $sql);

	if($senha != $confirmar_senha){
		$alerta = "<div class='alert-danger mb-3' role='alert'> 
        <span class='fas fa-exclamation-triangle mr-2'></span>
        As senhas não são iguais!!</div>";

	}else if(mysqli_num_rows($result) > 0){
		$alerta = "<div class='alert-danger mb-3' role='alert'> 
        <span class='fas fa-exclamation-triangle mr-2'></span>
        O usuário já existe no banco!</div>";

	}else{
		$sql_cadastra = "INSERT INTO tb_usuarios 
        (db_nome_completo, db_usuario, db_senha, db_confirmar_senha) 
        VALUES 
        ('$nome_completo', '$usuario', '$senha', '$confirmar_senha')";

		$cadastra = mysqli_query($conexao, $sql_cadastra);
		if($cadastra == ''){
			$alerta = "<div class='alert-danger mb-3' role='alert'> 
            <span class='fas fa-exclamation-triangle mr-2'></span>
             Erro ao Cadastrar usuário</div>";

		}else{
			$alerta = "<div class='alert-success mb-3' role='alert'> 
            <span class='fas fa-check-circle mr-2'></span>
            Cadastrado com Sucesso</div>";
		}
	}
}

$smarty->assign("alerta", $alerta);
$smarty->display("registrar_usuario.tpl");

?>