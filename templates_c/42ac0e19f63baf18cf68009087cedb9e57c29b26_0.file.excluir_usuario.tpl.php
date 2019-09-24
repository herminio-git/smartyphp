<?php
/* Smarty version 3.1.33, created on 2019-09-24 15:31:44
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\excluir_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8a1ac019fcc2_79225259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42ac0e19f63baf18cf68009087cedb9e57c29b26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\excluir_usuario.tpl',
      1 => 1569331030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8a1ac019fcc2_79225259 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9">

    <div class="card ">
            <div class="card-header text-white bg-primary text-center">
                Excluir Usuário
            </div><br> 

        <div class="card-body" width="95%">
            <div class="alert alert-danger" role="alert">
                <h3>
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Erro:</span>
                Deseja Excluir o usuário <b><?php ob_start();
echo $_smarty_tpl->tpl_vars['nome_completo']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
? </b>
                </h3>
                <hr>
                Ao excluir o usuário perderá todos os privilégios e todas as suas informações serão excluidas do banco de dados!!
                <center>
                    <a href="index.php?ac=excluir&id=<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
&opc=del" class="btn btn-primary"><span class="glyphicon glyphicon-trash">&nbsp;</span>Excluir Definitivamente</a>
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                </center>
            </div>
        </div>
    </div>
</div>        

<!-- <i class="fas fa-exclamation-triangle"></i> --><?php }
}
