<?php
/* Smarty version 3.1.33, created on 2019-09-19 15:10:55
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\teste.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d837e5feabd94_93688873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd8e9ad648dbc4da454bd218d6bc7cc3a1824c0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\teste.php',
      1 => 1568898648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d837e5feabd94_93688873 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <title>Bem vindos!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">

        <a href"../../../../phpMyAdmin/index.php" class="btn btn-success mt-5 mb-5">PhpMyAdmin</a>

        <h3><?php echo $_smarty_tpl->tpl_vars['var1']->value;?>
</h3>
        <h4><?php echo $_smarty_tpl->tpl_vars['var2']->value;?>
</h4>
        <h5><?php echo $_smarty_tpl->tpl_vars['var3']->value;?>
</h5>
        <hr>
        <h2>Array</h2>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'dados');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dados']->value) {
?>

        <b>Nome: </b><?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
<br>
        <b> Sobrenome: </b><?php echo $_smarty_tpl->tpl_vars['dados']->value['sobrenome'];?>
<br><br>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
