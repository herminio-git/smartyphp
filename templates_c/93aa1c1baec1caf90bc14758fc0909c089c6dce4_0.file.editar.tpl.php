<?php
/* Smarty version 3.1.33, created on 2019-09-24 14:42:06
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8a0f1e9a1668_40273430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93aa1c1baec1caf90bc14758fc0909c089c6dce4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\editar.tpl',
      1 => 1569316732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8a0f1e9a1668_40273430 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="default col-md-9">
       
            <div class="card ">
                <div class="card-header text-white bg-primary text-center">
                    Editar Usuário
                </div><br>
            
                <form name="registrar_usuario" method="post">
        
                    <div class="card-body">
                        <div class="form-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Nome Completo  
                                </span>
                                <input type="text" name="ed_nome_completo" id="ed_nome_completo"
                                     class="form-control" placeholder="Insira seu nome de completo" 
                                     value="<?php echo $_smarty_tpl->tpl_vars['nome_completo']->value;?>
"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Nome Usuário &nbsp &nbsp     
                                </span>
                                <input type="text" name="ed_usuario" id="ed_usuario" 
                                    class="form-control" placeholder="Insira seu nome de usuário"
                                     value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Senha&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
                                </span>
                                <input type="password" name="ed_senha" id="ed_senha"
                                     class="form-control" placeholder="Insira sua senha..." 
                                     value="<?php echo $_smarty_tpl->tpl_vars['senha']->value;?>
"  
                                     required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Confirmar senha   
                                </span>
                                <input type="password" name="ed_confirmar_senha" id="ed_confirmar_senha" 
                                    class="form-control" placeholder="Confirme a senha..."   
                                    value="<?php echo $_smarty_tpl->tpl_vars['confirmar_senha']->value;?>
"
                                    required>
                            </div>
                        </div>

                        <input type="hidden" name="ed_usuario" id="ed_usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
">

                        <center>
                            <input class="btn btn-primary" type="submit" 
                                name="btn_editar" value="Editar Usuário">
                                <a href="index.php" 
                                    class="btn btn-danger">
                                    &nbsp &nbsp &nbsp Cancelar &nbsp &nbsp &nbsp 
                                </a>
                        </center>
                                 
                    </div>
                    
                
                </form>

                   

            </div>

           
</div> <!-- End - div row que começa no "menu.tpl" -->    <?php }
}
