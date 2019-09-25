<?php
/* Smarty version 3.1.33, created on 2019-09-25 16:39:57
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\editar_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8b7c3d2ff7a2_64545118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b51d008622c2b76cc9a9e2060d1b67c71a392fd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\editar_usuario.tpl',
      1 => 1569422355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8b7c3d2ff7a2_64545118 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9">

    <div class="card ">
        <div class="card-header text-white bg-primary text-center">
            Editar Usuários
        </div><br> 

        <div class="card mr-2 ml-2 mb-5">

            <table id="tb_usuario" class="table table-striped table-bordered mr-2" cellspacing="0" width="100%">

                <thead >

                    <th>ID</th>
                    <th>Nome</th>
                    <th>Usuário</th>
                    <th>Opções</th>
                </thead>
                <tbody>

                    <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_usuarios']->value, 'tb_usuarios');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tb_usuarios']->value) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                    <tr>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_usuarios']->value['db_id_usuario'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</td>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_usuarios']->value['db_nome_completo'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_usuarios']->value['db_usuario'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</td>
                        <!-- botões - editar - excluir -->
                        <td>
                            <a href="index.php?ac=editar&id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_usuarios']->value['db_id_usuario'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" 
                            class="btn btn-primary">
                            <i class="fas fa-user-edit mr-2"></i>
                                Editar
                            </a>

                            <a href="index.php?ac=excluir&id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['tb_usuarios']->value['db_id_usuario'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" 
                            class="btn btn-danger ">
                            <i class="fas fa-trash-alt mr-2"></i>
                                Excluir
                            </a>

                        </td>
                    </tr>
                    <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>


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
