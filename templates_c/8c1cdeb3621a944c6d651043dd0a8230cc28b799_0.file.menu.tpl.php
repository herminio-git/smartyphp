<?php
/* Smarty version 3.1.33, created on 2019-09-24 22:26:07
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8a7bdf12ed79_97378682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c1cdeb3621a944c6d651043dd0a8230cc28b799' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\menu.tpl',
      1 => 1569356754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8a7bdf12ed79_97378682 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<div class="default col-md-3 para_imprimir">
		<div class="list-group">
			<a href="#" class="list-group-item active">Menu Usuários</a>
			
			<a href="index.php?ac=registrar_usuario" class="list-group-item <?php echo $_smarty_tpl->tpl_vars['botao']->value;?>
">Inserir Usuário</a>
			<a href="index.php?ac=editar_usuario" class="list-group-item <?php echo $_smarty_tpl->tpl_vars['botao']->value;?>
">Editar Usuário</a>
			<a href="index.php?ac=rel_usuario" class="list-group-item">Relatório Usuário</a>
			<a href="sair.php" class="list-group-item ">Sair</a>
		</div>

		<div class="list-group mt-3">
			<a href="#" class="list-group-item active">Menu Funcionários</a>
			
			<a href="index.php?ac=registrar_funcionario" class="list-group-item">Inserir Funcionário</a>
			<a href="index.php?ac=editar_funcionario" class="list-group-item">Editar Funcionário</a>
			<a href="#" class="list-group-item">Relatório Funcionário</a>
		</div>

	</div><?php }
}
