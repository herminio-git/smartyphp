<?php
/* Smarty version 3.1.33, created on 2019-09-26 01:04:19
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\editar_funcionario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8bf273b7d672_05984023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a517e7ff2cbc4ee15919cee2f6d86e2bfc6b1b83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\editar_funcionario.tpl',
      1 => 1569452233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8bf273b7d672_05984023 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-10">

    <div class="card ">
        <div class="card-header text-white bg-primary text-center">
            Editar Fucionário
        </div><br> 

        <div class="card mr-2 ml-2 mb-5">

            <table id="tb_funcionarios" class="table table-striped table-bordered mr-2" cellspacing="0" width="100%">

                <thead >

                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                     <th>Endereço</th>
                      <th>Telefone</th>
                    <th>Opções</th>
                </thead>
                <tbody>

                    <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_funcionario']->value, 'tb_funcionarios');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tb_funcionarios']->value) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                    <tr>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_funcionarios']->value['db_id_funcionario'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</td>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_funcionarios']->value['db_nome_completo'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_funcionarios']->value['db_cpf'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</td>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_funcionarios']->value['db_endereco'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</td>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_funcionarios']->value['db_telefone'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</td>
                        <!-- botões - editar - excluir -->
                        <td>
                            <a href="index.php?ac=editar_func&id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_funcionarios']->value['db_id_funcionario'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" 
                            class="btn btn-primary">
                            <i class="fas fa-user-edit mr-2"></i>
                                Editar
                            </a>

                            <a href="index.php?ac=excluir_func&id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_funcionarios']->value['db_id_funcionario'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
" 
                            class="btn btn-danger">
                            <i class="fas fa-trash-alt mr-2"></i>
                                Excluir
                            </a>
                        </td>
                    </tr>
                    <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>


                </tbody>    
            </table>

        </div>    

    </div>    

</div>

<!-- script para usar recursos do "data table" -->
<!--
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        $("#tb_usuario").DataTable();
    });<?php echo '</script'; ?>
> -->

<?php }
}
