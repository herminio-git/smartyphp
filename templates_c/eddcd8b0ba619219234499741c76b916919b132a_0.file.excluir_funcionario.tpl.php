<?php
/* Smarty version 3.1.33, created on 2019-09-25 14:00:33
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\excluir_funcionario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8b56e1958743_67834681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eddcd8b0ba619219234499741c76b916919b132a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\excluir_funcionario.tpl',
      1 => 1569412825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8b56e1958743_67834681 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9">

    <div class="card ">
            <div class="card-header text-white bg-primary text-center">
                Excluir Funcionário
            </div><br> 

        <div class="card-body" width="95%">
            <div class="alert alert-danger text-center mb-5" role="alert">
                <h3>
                    <i class="fas fa-exclamation-circle"></i>
                    <!-- Explicação sobre "sr-only" em: https://getbootstrap.com.br/docs/4.1/getting-started/accessibility/ -->
                    <span class="sr-only">Perigo: </span>
                    &nbsp Deseja Excluir o Funcionário <b><?php ob_start();
echo $_smarty_tpl->tpl_vars['nome_completo']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
? </b>
                </h3>
                <hr>
                Ao excluir o funcionário perderá todos os privilégios e todas as suas informações serão excluidas do banco de dados!!
                <center>
                    <a href="index.php?ac=excluir_func&id=<?php echo $_smarty_tpl->tpl_vars['id_funcionario']->value;?>
&opc=del" class="btn btn-primary mt-3"><i class="fas fa-exclamation"></i>&nbsp Excluir Definitivamente</a>
                    <a href="index.php" class="btn btn-danger mt-3">Cancelar</a>
                </center>
            </div>
        </div>
    </div>
</div>        

<!-- <i class="fas fa-exclamation-triangle"></i> --><?php }
}
