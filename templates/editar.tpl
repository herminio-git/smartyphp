
    <div class="default col-md-10">
       
            <div class="card ">
                <div class="card-header text-white bg-primary text-center">
                    Editar Usuário
                </div><br>

            <div class="row">
                <div class="form_coluna_um col-md-9">    
            
                <form name="registrar_usuario" method="post">
        
                    <div class="card-body">
                        <div class="form-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Nome Completo  
                                </span>
                                <input type="text" name="ed_nome_completo" id="ed_nome_completo"
                                     class="form-control" placeholder="Insira seu nome de completo" 
                                     value="{$nome_completo}"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Nome Usuário &nbsp &nbsp     
                                </span>
                                <input type="text" name="ed_usuario" id="ed_usuario" 
                                    class="form-control" placeholder="Insira seu nome de usuário"
                                     value="{$usuario}"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Senha&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
                                </span>
                                <input type="password" name="ed_senha" id="ed_senha"
                                     class="form-control" placeholder="Insira sua senha..." 
                                     value="{$senha}"  
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
                                    value="{$confirmar_senha}"
                                    required>
                            </div>
                        </div>

                        <input type="hidden" name="ed_usuario" id="ed_usuario" value="{$usuario}">

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
                </div><!-- End - form_coluna_um -->
                            <div class="form_coluna_dois col-md-3 mb-5">
                
                <img src="includes\img\photo.png" alt="..." class="rounded">
            </div><!-- End - form_coluna_dois -->
                </div><!-- End - row -->
                   

            </div>

           
</div> <!-- End - div row que começa no "menu.tpl" -->    