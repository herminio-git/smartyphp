<?php 


if($_POST){
	$id_usuario = $_POST["ed_usuario"];
	$nome_completo = $_POST["ed_nome_completo"];
	$usuario = $_POST["ed_usuario"];
	$senha = $_POST["ed_senha"];
	$confirmar_senha = $_POST["ed_confirmar_senha"];

	if($senha != $confirmar_senha){
		echo "<script>
		alert('As senhas são diferentes');
		location.replace('index.php?ac=editar&id= ". $_GET["id"] ." ');
		</script>"; 
	}

	$sql = "UPDATE tb_usuarios SET 
                    db_nome_completo = '$nome_completo', 
                    db_usuario = '$usuario', 
                    db_senha = '$senha', 
                    db_confirmar_senha = '$confirmar_senha' 
                    WHERE db_id_usuario = '$id_usuario' ";

	$result = mysqli_query($conexao, $sql);
	if($result == ''){
		
		echo "<script>
		alert('Erro ao Atualizar');
		location.replace('index.php?ac=editar&id= ". $_GET["id"] ." ');
		</script>"; 
		}else{
			
			echo "<script>
		alert('Usuário editado com sucesso!');
		location.replace('index.php?ac=editar_usuario');
		</script>"; 
		echo $result;
	}

}


$id_usuario = $_GET["id"];

$sql = "SELECT * FROM tb_usuarios WHERE db_id_usuario='$id_usuario'";
$consultar_usuarios = mysqli_query($conexao, $sql);

while($linha_dados = mysqli_fetch_array($consultar_usuarios)){
	$id_usuario = $linha_dados["db_id_usuario"];
	$nome_completo = $linha_dados["db_nome_completo"];
	$usuario = $linha_dados["db_usuario"];
	$senha = $linha_dados["db_senha"];
	$confirmar_senha = $linha_dados["db_confirmar_senha"];
}

$smarty->assign("id_usuario", $id_usuario);
$smarty->assign("nome_completo", $nome_completo);
$smarty->assign("usuario", $usuario);
$smarty->assign("senha", $senha);
$smarty->assign("confirmar_senha", $confirmar_senha);
$smarty->display("editar.tpl");

?>