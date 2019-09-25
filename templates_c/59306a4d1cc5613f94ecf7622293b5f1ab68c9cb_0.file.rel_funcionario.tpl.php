<?php
/* Smarty version 3.1.33, created on 2019-09-26 01:04:23
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\rel_funcionario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8bf2773ae2f2_39693917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59306a4d1cc5613f94ecf7622293b5f1ab68c9cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\rel_funcionario.tpl',
      1 => 1569452337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8bf2773ae2f2_39693917 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-10">
	
    <div class="card ">
            <div class="card-header text-white bg-primary text-center">
                Relatório de Funcionários - <?php ob_start();
echo $_smarty_tpl->tpl_vars['data_atual']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

            </div><br>

		<div class="card-body" width="95%">
			<table id="tb_usuario" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<th>ID</th>
					<th>Nome</th>
					<th>CPF</th>
					<th>Endereço</th>
					<th>Telefone</th>
					
				</thead>
				<?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_funcionarios']->value, 'tb_funcionarios');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tb_funcionarios']->value) {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

				<tr>
					<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_funcionarios']->value['db_id_funcionario'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
					<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_funcionarios']->value['db_nome_completo'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</td>
					<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_funcionarios']->value['db_cpf'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</td>
					<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_funcionarios']->value['db_endereco'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</td>
					<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_funcionarios']->value['db_telefone'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</td>
					
				</tr>
				<?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>

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
