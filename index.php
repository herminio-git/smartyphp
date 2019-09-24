<<?php 
$botao = "";
session_start();
include("includes/config.ini.php");
$conexao = conectar();

$titulo = "Sistema de Gerenciamento";


$smarty->assign("titulo", $titulo);
$smarty->display("cabecalho.tpl");
if(!isset($_SESSION["usuario"])){
		$botao = "disabled";
	}
$smarty->assign("botao", $botao);
$smarty->display("menu.tpl");

if(isset($_GET["ac"]) && $_GET["ac"]=="registrar_usuario"){
	include("registrar_usuario.php");

}else if(isset($_GET["ac"]) && $_GET["ac"]=="editar_usuario"){
	include("editar_usuario.php");

}else if(isset($_GET["ac"]) && $_GET["ac"]=="editar"){
	include("editar.php");

}else if(isset($_GET["ac"]) && $_GET["ac"]=="excluir"){
	include("excluir_usuario.php");

}else if(isset($_GET["ac"]) && $_GET["ac"]=="rel_usuario"){
	include("rel_usuario.php");

}else if(isset($_GET["ac"]) && $_GET["ac"]=="registrar_funcionario"){
	include("registrar_funcionario.php");

}else if(isset($_GET["ac"]) && $_GET["ac"]=="editar_funcionario"){
	include("editar_funcionario.php");

}else if(isset($_GET["ac"]) && $_GET["ac"]=="editar_func"){
	include("editar_func.php");

}else if(!isset($_SESSION["usuario"])){
	include("login.php");
}else{
	?>
		<div class="default col-md-9">
			<img src="includes/img/sistema.jpeg" width="75%">
		</div>
	<?php
}



$smarty->display("rodape.tpl");
 
?>