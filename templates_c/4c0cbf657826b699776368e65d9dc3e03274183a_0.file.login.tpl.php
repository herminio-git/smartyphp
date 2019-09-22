<?php
/* Smarty version 3.1.33, created on 2019-09-22 09:16:24
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d871fc861c8f4_47545077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c0cbf657826b699776368e65d9dc3e03274183a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\login.tpl',
      1 => 1569136581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d871fc861c8f4_47545077 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="default col-md-9">

            <div class="card ">
                <div class="card-header text-white bg-primary text-center">
                    Efetuar Login
            </div><br>
            
                <form name="registrar_usuario" method="post">
        
                    <div class="card-body">
                        <!-- <?php ob_start();
echo $_smarty_tpl->tpl_vars['alerta']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 -->
                       

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                   Usuário&nbsp    
                                </span>
                                <input type="text" name="usuario_login" id="usuario_login" class="form-control" placeholder="Insira seu nome de usuário" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                 Senha &nbsp &nbsp
                                </span>
                                <input type="text" name="senha_login" id="senha_login" class="form-control" placeholder="Insira sua senha..."   required>
                            </div>
                        </div>

                        <center>
                            <input class="btn btn-primary" type="submit" name="btn_Inserir" value="Login">
                           
                        </center>
                                 
                    </div>
                    
                
                </form>

                   

            </div>

           
</div> <!-- End - div row que começa no "menu.tpl" -->    <?php }
}
