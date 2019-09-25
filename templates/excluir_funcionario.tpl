<div class="col-md-10">

    <div class="card ">
            <div class="card-header text-white bg-primary text-center">
                Excluir Funcionário
            </div><br> 

        <div class="card-body" width="95%">
            <div class="alert alert-danger text-center mb-5" role="alert">
                <h3>
                    <i class="fas fa-exclamation-circle"></i>
                    <!-- Explicação sobre "sr-only" em: https://getbootstrap.com.br/docs/4.1/getting-started/accessibility/ -->
                    <span class="sr-only">Perigo: </span>
                    &nbsp Deseja Excluir o Funcionário <b>{{$nome_completo}}? </b>
                </h3>
                <hr>
                Ao excluir o funcionário perderá todos os privilégios e todas as suas informações serão excluidas do banco de dados!!
                <center>
                    <a href="index.php?ac=excluir_func&id={$id_funcionario}&opc=del" class="btn btn-primary mt-3"><i class="fas fa-exclamation"></i>&nbsp Excluir Definitivamente</a>
                    <a href="index.php" class="btn btn-danger mt-3">Cancelar</a>
                </center>
            </div>
        </div>
    </div>
</div>        

<!-- <i class="fas fa-exclamation-triangle"></i> -->