<?php
/* Smarty version 3.1.33, created on 2019-09-20 18:33:14
  from 'C:\xampp\htdocs\qcursos\smartyphp\templates\registrar_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d84ff4a90a604_52061575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '194b99ee6498a3c86238f510fee94aab66d2360a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qcursos\\smartyphp\\templates\\registrar_usuario.tpl',
      1 => 1568997192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d84ff4a90a604_52061575 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="default col-md-9">
        <!--<div class="panel panel-primary">
			<div class="panel panel-heading">
				<center><b>Adicionar Usuário</b></center>
			</div>

            <div class="panel-body" width="95%">

                <form name="registrar_usuario" method="post">

                    <div class="form-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								Nome Completo &nbsp &nbsp &nbsp   
							</span>
							<input type="text" name="nome_completo" id="nome_completo" class="form-control" placeholder="Insira seu nome de completo"   required>
						</div>
					</div>

                    <div class="form-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								Nome Usuário &nbsp &nbsp &nbsp   
							</span>
							<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Insira seu nome de usuário"   required>
						</div>
					</div>
                </form> -->

                

            <div class="card ">
                <div class="card-header text-white bg-primary">
                    Destaque
            </div>
            
                <form name="registrar_usuario" method="post">
        
                    <div class="card-body">
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Nome Completo  
                                </span>
                                <input type="text" name="nome_completo" id="nome_completo" class="form-control" placeholder="Insira seu nome de completo"   required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Nome Usuário &nbsp &nbsp     
                                </span>
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Insira seu nome de usuário"   required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Senha&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
                                </span>
                                <input type="text" name="senha" id="senha" class="form-control" placeholder="Insira sua senha..."   required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Confirmar senha   
                                </span>
                                <input type="text" name="confirmar_senha" id="confirmar_senha" class="form-control" placeholder="Confirme a senha..."   required>
                            </div>
                        </div>

                        <center>
                            <input class="btn btn-primary" type="submit" name="btn_Inserir" value="Inserir Usuário">
                            <a href="index.php" class="btn btn-danger">Cancelar</a>
                        </center>
                                 
                    </div>
                    
                
                </form>

                   

            </div>

           
</div> <!-- End - div row que começa no "menu.tpl" -->    <?php }
}