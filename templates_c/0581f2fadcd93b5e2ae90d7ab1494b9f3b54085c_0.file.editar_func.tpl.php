<?php
/* Smarty version 3.1.33, created on 2019-09-25 13:01:13
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\editar_func.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8b48f9ea9647_24302544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0581f2fadcd93b5e2ae90d7ab1494b9f3b54085c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\editar_func.tpl',
      1 => 1569409264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8b48f9ea9647_24302544 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="default col-md-9">
       
            <div class="card ">
                <div class="card-header text-white bg-primary text-center">
                    Editar Funcionário
                </div><br>
            
                <form name="registrar_funcionario" method="post">
        
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
                                    CPF&nbsp &nbsp &nbsp     
                                </span>
                                <input type="text" name="ed_cpf" id="ed_cpf" 
                                    class="form-control" placeholder="Insira seu CPF"
                                     value="<?php echo $_smarty_tpl->tpl_vars['cpf']->value;?>
"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Endereço 
                                </span>
                                <input type="text" name="ed_endereco" id="ed_endereco"
                                     class="form-control" placeholder="Insira seu endereço..." 
                                     value="<?php echo $_smarty_tpl->tpl_vars['endereco']->value;?>
"  
                                     required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Telefone   
                                </span>
                                <input type="text" name="ed_telefone" id="ed_telefone" 
                                    class="form-control" placeholder="Insira se telefone..."   
                                    value="<?php echo $_smarty_tpl->tpl_vars['telefone']->value;?>
"
                                    required>
                            </div>
                        </div>
                        
                        <!-- Campo oculto, ocultado pelo hidden -->
                        <input type="hidden" name="oculto_id_funcionario" id="oculto_id_funcionario" value="<?php echo $_smarty_tpl->tpl_vars['oculto_id_funcionario']->value;?>
">

                        <center>
                            <input class="btn btn-primary" type="submit" 
                                name="btn_editar" value="Editar Funcionário">
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
