<?php
/* Smarty version 3.1.33, created on 2019-09-26 00:59:31
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\registrar_funcionario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8bf153c5a3a6_72405351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b50102a5859848c17815d18b4973f1f596583cf4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\registrar_funcionario.tpl',
      1 => 1569452310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8bf153c5a3a6_72405351 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="default col-md-10">

            <div class="card ">
                <div class="card-header text-white bg-primary text-center">
                    Adicionar Funcionário
                </div><br>
            
                <form name="registrar_funcionario" method="post">
        
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

                        <div class="form-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    CPF&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                </span>
                                <input type="text" name="rg_cpf" id="rg_cpf" 
                                    class="form-control" placeholder="Insira seu CPF..."  
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Endereço &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp     
                                </span>
                                <input type="text" name="rg_endereco" id="rg_endereco" 
                                    class="form-control" placeholder="Insira o endereço..." 
                                      
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Telefone&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
                                </span>
                                <input type="text" name="rg_telefone" 
                                    id="rg_senha" class="form-control" 
                                    placeholder="Insira o telefone..."   
                                    required>
                            </div>
                        </div>

                        
                        </div>

                        <center>
                            <input class="btn btn-primary mb-4" type="submit" name="btn_Inserir" value="Inserir Funcionário">
                            <a href="index.php" class="btn btn-danger mb-4">&nbsp &nbsp &nbsp Cancelar &nbsp &nbsp &nbsp </a>
                        </center>
                                 
                    </div>
                    
                
                </form>

                   

            </div>

           
</div> <!-- End - div row que começa no "menu.tpl" -->    <?php }
}
