
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
                <div class="card-header text-white bg-primary text-center">
                    Adicionar Usuário
            </div><br>
            
                <form name="registrar_usuario" method="post">
        
                    <div class="card-body">
                        {{$alerta}}
                        <div class="form-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Nome Completo  
                                </span>
                                <input type="text" name="nome_completo" id="nome_completo" class="form-control" placeholder="Insira seu nome de completo" value="{$smarty.post.nome_completo}"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Nome Usuário &nbsp &nbsp     
                                </span>
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Insira seu nome de usuário" value="{$smarty.post.usuario}"  required>
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
                            <a href="index.php" class="btn btn-danger">&nbsp &nbsp &nbsp Cancelar &nbsp &nbsp &nbsp </a>
                        </center>
                                 
                    </div>
                    
                
                </form>

                   

            </div>

           
</div> <!-- End - div row que começa no "menu.tpl" -->    