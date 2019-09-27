
    <div class="default col-md-10">

        <div class="card ">
                <div class="card-header text-white bg-primary text-center">
                    Adicionar Funcionário
                </div><br>

            <div class="row">    

                <div class="coluna_um col-md-9">
            
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


                            <center>
                                <input class="btn btn-primary mb-4" type="submit" name="btn_Inserir" value="Inserir Funcionário">
                                <a href="index.php" class="btn btn-danger mb-4">&nbsp &nbsp &nbsp Cancelar &nbsp &nbsp &nbsp </a>
                            </center>
                                    
                        </div>
                        
                    
                    </form>
                </div>
                <!-- End - coluna_um -->            

                <div class="coluna_dois col-md-3 mb-5">
                    <img src="includes\img\photo.png" alt="..." class="rounded">
                </div>
                <!-- End - coluna_dois -->

            </div>
            <!-- End - row -->

        </div>
        <!-- End - card -->
                   
    </div>
    <!-- End - default -->

           
</div> <!-- End - div row que começa no "menu.tpl" -->    