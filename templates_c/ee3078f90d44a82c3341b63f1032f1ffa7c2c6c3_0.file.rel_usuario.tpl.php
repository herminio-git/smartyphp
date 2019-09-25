<?php
/* Smarty version 3.1.33, created on 2019-09-26 00:59:47
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\rel_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8bf16346e707_25955277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee3078f90d44a82c3341b63f1032f1ffa7c2c6c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\rel_usuario.tpl',
      1 => 1569452348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8bf16346e707_25955277 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-10">
	
    <div class="card ">
            <div class="card-header text-white bg-primary text-center">
                Relatório de Usuários - <?php ob_start();
echo $_smarty_tpl->tpl_vars['data_atual']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

            </div><br>

		<div class="card-body" width="95%">
			<table id="tb_usuario" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<th>ID</th>
					<th>Nome</th>
					<th>Usuário</th>
					
				</thead>
				<?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_usuarios']->value, 'tb_usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tb_usuario']->value) {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

				<tr>
					<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_usuario']->value['db_id_usuario'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
					<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_usuario']->value['db_nome_completo'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</td>
					<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_usuario']->value['db_usuario'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</td>
					
				</tr>
				<?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

			</table>

			
		</div>
		<div class="mb-4">
			<center>
				
                <button class="btn btn-success para_imprimir w-25" 
                    onclick="imprimir_rel()">
                    Imprimir
                </button>
                
                <a href="index.php" 
                    class="btn btn-danger para_imprimir">
                    Cancelar
                </a>
				
			</center>
		</div>
	</div>

</div>




<?php echo '<script'; ?>
 type="text/javascript">
	function imprimir_rel(){
		$(".para_imprimir").hide();
		window.print();
		$(".para_imprimir").show();
	}
<?php echo '</script'; ?>
>

<!--
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$("#tb_usuario").DataTable();
	});
<?php echo '</script'; ?>
><?php }
}
