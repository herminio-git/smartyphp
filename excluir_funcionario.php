<?php 

if($_GET["id"]!="" && isset($_GET["opc"]) && $_GET["opc"]=="del"){
	$id_funcionario=$_GET["id"];

	$sql = "DELETE FROM tb_funcionarios WHERE db_id_funcionario = '$id_funcionario'";
	$result = mysqli_query($conexao, $sql);
	if($result){
		echo "<script>
		alert('Excluido com sucesso!');
		location.replace('index.php?ac=editar_funcionario');
		</script>"; 
	}else{
		echo "<script>
		alert('Funcionário não foi excluido!');
		location.replace('index.php?ac=editar_funcionario');
		</script>"; 
	}

}else{
	$id_funcionario=$_GET["id"];
	$sql = "SELECT * FROM tb_funcionarios WHERE db_id_funcionario='$id_funcionario'";
$consultar = mysqli_query($conexao, $sql);

while($linha_dados = mysqli_fetch_array($consultar)){
	$id_funcionario = $linha_dados["db_id_funcionario"];
	$nome_completo = $linha_dados["db_nome_completo"];
	$cpf = $linha_dados["db_cpf"];
	$endereco = $linha_dados["db_endereco"];
	$telefone = $linha_dados["db_telefone"];
}

$smarty->assign("id_funcionario", $id_funcionario);
$smarty->assign("nome_completo", $nome_completo);
$smarty->assign("cpf", $cpf);
$smarty->assign("endereco", $endereco);
$smarty->assign("telefone", $telefone);
$smarty->display("excluir_funcionario.tpl");
}

 ?>