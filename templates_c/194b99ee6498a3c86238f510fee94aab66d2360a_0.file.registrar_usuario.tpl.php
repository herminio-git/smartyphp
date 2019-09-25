<?php
/* Smarty version 3.1.33, created on 2019-09-26 00:59:21
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\registrar_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8bf149366cd7_60250704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '194b99ee6498a3c86238f510fee94aab66d2360a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\registrar_usuario.tpl',
      1 => 1569452322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8bf149366cd7_60250704 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="default col-md-10">

            <div class="card ">
                <div class="card-header text-white bg-primary text-center">
                    Adicionar Usuário
                </div><br>
            
                <form name="registrar_usuario" method="post">
        
                    <div class="card-body">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['alerta']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                        <div class="form-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Nome Completo  
                                </span>
                                <input type="text" name="rg_nome_completo" id="rg_nome_completo" 
                                    class="form-control" placeholder="Insira seu nome de completo" 
                                      
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Nome Usuário &nbsp &nbsp     
                                </span>
                                <input type="text" name="rg_usuario" id="rg_usuario" 
                                    class="form-control" placeholder="Insira seu nome de usuário" 
                                      
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Senha&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
                                </span>
                                <input type="password" name="rg_senha" 
                                    id="rg_senha" class="form-control" 
                                    placeholder="Insira sua senha..."   
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Confirmar senha   
                                </span>
                                <input type="password" name="rg_confirmar_senha" 
                                    id="rg_confirmar_senha" class="form-control" 
                                    placeholder="Confirme a senha..."  
                                    required>
                            </div>
                        </div>

                        <center>
                            <input class="btn btn-primary" type="submit" name="btn_Inserir" value="Inserir Usuário">
                            <a href="index.php" class="btn btn-danger">&nbsp &nbsp &nbsp Cancelar &nbsp &nbsp &nbsp </a>
                        </center>
                                 
                    </div>
                    
                
                </form>

                   

            </div>

           
</div> <!-- End - div row que começa no "menu.tpl" -->    <?php }
}
