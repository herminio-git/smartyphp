
    <div class="default col-md-9">

            <div class="card ">
                <div class="card-header text-white bg-primary text-center">
                    Adicionar Funcionário
                </div><br>
            
                <form name="registrar_funcionario" method="post">
        
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

           
</div> <!-- End - div row que começa no "menu.tpl" -->    