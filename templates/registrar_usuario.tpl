    
    <!--  https://www.caelum.com.br/apostila-html-css-javascript/bootstrap-e-formularios-html5/#grid-responsivo-do-bootstrap -->
    <!--  https://rodrigomilano.com.br/a-grid-do-bootstrap-tudo-que-voce-sempre-quis-saber-mas-nao-tinha-a-quem-perguntar/ -->

    <div class="default col-md-10">


        <div class="card ">

            <div class="card-header text-white bg-primary text-center">
                Adicionar Usuário
            </div><br>

        <div class="row">    

            <div class="form_coluna_um col-md-9">
                
                <form  name="registrar_usuario" method="post">
                

                    <div class="card-body">

                        {{$alerta}}
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
                            <input class="btn btn-primary mb-3" type="submit" name="btn_Inserir" value="Inserir Usuário">
                            <a href="index.php" class="btn btn-danger mb-3">&nbsp &nbsp &nbsp Cancelar &nbsp &nbsp &nbsp </a>
                        </center>
                                    
                    </div>
                    
                
                </form>

            </div><!-- End - form_coluna_um -->

            <div class="form_coluna_dois col-md-3 mb-5">
                
                <img src="includes\img\photo.png" alt="..." class="rounded">
            </div><!-- End - form_coluna_dois -->

    </div><!-- End - default -->

    <!--------------->


   
           
</div> <!-- End - div row que começa no "menu.tpl" -->    