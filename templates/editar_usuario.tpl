<div class="col-md-10">

    <div class="card ">
        <div class="card-header text-white bg-primary text-center">
            Editar Usuários
        </div><br> 

        <div class="card mr-2 ml-2 mb-5">

            <table id="tb_usuario" class="table table-striped table-bordered mr-2" cellspacing="0" width="100%">

                <thead >

                    <th>ID</th>
                    <th>Nome</th>
                    <th>Usuário</th>
                    <th>Opções</th>
                </thead>
                <tbody>

                    {{foreach from=$array_usuarios item=tb_usuarios}}
                    <tr>
                        <td>{{$tb_usuarios.db_id_usuario}}</td>
                        <td>{{$tb_usuarios.db_nome_completo}}</td>
                        <td>{{$tb_usuarios.db_usuario}}</td>
                        <!-- botões - editar - excluir -->
                        <td>
                            <a href="index.php?ac=editar&id={{$tb_usuarios.db_id_usuario}}" 
                            class="btn btn-primary">
                            <i class="fas fa-user-edit mr-2"></i>
                                Editar
                            </a>

                            <a href="index.php?ac=excluir&id={{$tb_usuarios.db_id_usuario}}" 
                            class="btn btn-danger ">
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

