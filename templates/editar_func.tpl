
    <div class="default col-md-10">
       
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
                                     value="{$nome_completo}"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    CPF&nbsp &nbsp &nbsp     
                                </span>
                                <input type="text" name="ed_cpf" id="ed_cpf" 
                                    class="form-control" placeholder="Insira seu CPF"
                                     value="{$cpf}"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Endereço 
                                </span>
                                <input type="text" name="ed_endereco" id="ed_endereco"
                                     class="form-control" placeholder="Insira seu endereço..." 
                                     value="{$endereco}"  
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
                                    value="{$telefone}"
                                    required>
                            </div>
                        </div>
                        
                        <!-- Campo oculto, ocultado pelo hidden -->
                        <input type="hidden" name="oculto_id_funcionario" id="oculto_id_funcionario" value="{$oculto_id_funcionario}">

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

           
</div> <!-- End - div row que começa no "menu.tpl" -->    