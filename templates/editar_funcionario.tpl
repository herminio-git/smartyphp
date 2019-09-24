<div class="col-md-9">

    <div class="card ">
        <div class="card-header text-white bg-primary text-center">
            Editar Fucionário
        </div><br> 

        <div class="card mr-2 ml-2 mb-5">

            <table id="tb_funcionarios" class="table table-striped table-bordered mr-2" cellspacing="0" width="100%">

                <thead >

                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                     <th>Endereço</th>
                      <th>Telefone</th>
                    <th>Opções</th>
                </thead>
                <tbody>

                    {{foreach from=$array_funcionario item=tb_funcionarios}}
                    <tr>
                        <td>{{$tb_funcionarios.db_id_funcionario}}</td>
                        <td>{{$tb_funcionarios.db_nome_completo}}</td>
                        <td>{{$tb_funcionarios.db_cpf}}</td>
                        <td>{{$tb_funcionarios.db_endereco}}</td>
                        <td>{{$tb_funcionarios.db_telefone}}</td>
                        <!-- botões - editar - excluir -->
                        <td>
                            <a href="index.php?ac=editar_func&id={{$tb_funcionarios.db_id_funcionario}}" 
                            class="btn btn-primary">
                            <i class="fas fa-user-edit mr-2"></i>
                                Editar
                            </a>

                            <a href="index.php?ac=excluir_func&id={{$tb_funcionarios.db_id_funcionario}}" 
                            class="btn btn-danger">
                            <i class="fas fa-trash-alt mr-2"></i>
                                Excluir
                            </a>
                        </td>
                    </tr>
                    {{/foreach}}

                </tbody>    
            </table>

        </div>    

    </div>    

</div>

<!-- script para usar recursos do "data table" -->
<!--
<script type="text/javascript">
    $(document).ready(function(){
        $("#tb_usuario").DataTable();
    });</script> -->

