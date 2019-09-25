
    <div class="default col-md-10">

            <div class="card ">
                <div class="card-header text-white bg-primary text-center">
                    Efetuar Login
            </div><br>
            
                <form name="registrar_usuario" method="post">
        
                    <div class="card-body">
                         {{$alerta}} 
                       

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                   Usuário&nbsp    
                                </span>
                                <input type="text" name="login_usuario" 
                                id="usuario_login" class="form-control" 
                                placeholder="Insira seu nome de usuário" 
                                required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                 Senha &nbsp &nbsp
                                </span>
                                <input type="password" name="login_senha" 
                                    id="senha_login" class="form-control" 
                                    placeholder="Insira sua senha..."   
                                    required>
                            </div>
                        </div>

                        <center>
                            <input class="btn btn-primary w-25" type="submit" name="btn_Inserir" value="Login">
                           
                        </center>
                                 
                    </div>
                    
                
                </form>

                   

            </div>

           
</div> <!-- End - div row que começa no "menu.tpl" -->    