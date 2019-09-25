<?php 


if($_POST){
	$id_funcionario = $_POST["oculto_id_funcionario"];
	$nome_completo = $_POST["ed_nome_completo"];
	$cpf = $_POST["ed_cpf"];
	$endereco = $_POST["ed_endereco"];
	$telefone = $_POST["ed_telefone"];


	$sql = "UPDATE tb_funcionarios SET 
                    db_nome_completo = '$nome_completo', 
                    db_cpf = '$cpf', 
                    db_endereco = '$endereco', 
                    db_telefone = '$telefone' 
                    WHERE db_id_funcionario = '$id_funcionario' ";

	$result = mysqli_query($conexao, $sql);
	if($result == ''){
		var_dump ($sql); exit;
		echo "<script>
		alert('Erro ao Atualizar');
		location.replace('index.php?ac=editar_funcionario&id= ". $_GET["id"] ." ');
		</script>"; 
		}else{
			
			echo "<script>
		alert('Editado com sucesso!');
		location.replace('index.php?ac=editar_funcionario');
		</script>"; 
		echo $result;
	}

}


$id_funcionario = $_GET["id"];

$sql = "SELECT * FROM tb_funcionarios WHERE db_id_funcionario='$id_funcionario'";
$consultar = mysqli_query($conexao, $sql);

while($linha_dados = mysqli_fetch_array($consultar)){
	$id_funcionario = $linha_dados["db_id_funcionario"];
	$nome_completo = $linha_dados["db_nome_completo"];
	$cpf = $linha_dados["db_cpf"];
	$endereco = $linha_dados["db_endereco"];
	$telefone = $linha_dados["db_telefone"];
}

$smarty->assign("oculto_id_funcionario", $id_funcionario);
$smarty->assign("nome_completo", $nome_completo);
$smarty->assign("cpf", $cpf);
$smarty->assign("endereco", $endereco);
$smarty->assign("telefone", $telefone);
$smarty->display("editar_func.tpl");

?>