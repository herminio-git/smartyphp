<?php
/* Smarty version 3.1.33, created on 2019-09-25 13:56:49
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\excluir_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8b5601788514_23567325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42ac0e19f63baf18cf68009087cedb9e57c29b26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\excluir_usuario.tpl',
      1 => 1569412601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8b5601788514_23567325 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9">

    <div class="card ">
            <div class="card-header text-white bg-primary text-center">
                Excluir Usuário
            </div><br> 

        <div class="card-body" width="95%">
            <div class="alert alert-danger text-center mb-5" role="alert">
                <h3>
                   <i class="fas fa-exclamation-circle"></i>
                    <!-- Explicação sobre "sr-only" em: https://getbootstrap.com.br/docs/4.1/getting-started/accessibility/ -->
                    <span class="sr-only ">Perigo: </span>
                   &nbsp Deseja Excluir o usuário <b><?php ob_start();
echo $_smarty_tpl->tpl_vars['nome_completo']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
? </b>
                </h3>
                <hr>
                Ao excluir o usuário perderá todos os privilégios e todas as suas informações serão excluidas do banco de dados!!
                <center>
                    <a href="index.php?ac=excluir&id=<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
&opc=del" class="btn btn-primary mt-3"><i class="fas fa-exclamation-circle"></i>&nbsp Excluir Definitivamente</a>
                    <a href="index.php" class="btn btn-danger mt-3">Cancelar</a>
                </center>
            </div>
        </div>
    </div>
</div>        

<!-- <i class="fas fa-exclamation-triangle"></i> --><?php }
}
