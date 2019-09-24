<?php 

if($_GET["id"]!="" && isset($_GET["opc"]) && $_GET["opc"]=="del"){
	$id_usuario=$_GET["id"];

	$sql = "DELETE FROM tb_usuarios WHERE db_id_usuario = '$id_usuario'";
	$result = mysqli_query($conexao, $sql);
	if($result){
		echo "<script>
		alert('Usuário excluido com sucesso!');
		location.replace('index.php?ac=editar_usuario');
		</script>"; 
	}else{
		echo "<script>
		alert('O usuário não foi excluido!');
		location.replace('index.php?ac=editar_usuario');
		</script>"; 
	}

}else{
	$id_usuario=$_GET["id"];
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
$smarty->display("excluir_usuario.tpl");
}

 ?>