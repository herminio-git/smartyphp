
<div class="col-md-9">
	
    <div class="card ">
            <div class="card-header text-white bg-primary text-center">
                Relatório de Funcionários - {{$data_atual}}
            </div><br>

		<div class="card-body" width="95%">
			<table id="tb_usuario" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<th>ID</th>
					<th>Nome</th>
					<th>CPF</th>
					<th>Endereço</th>
					<th>Telefone</th>
					
				</thead>
				{{foreach from=$array_funcionarios item=tb_funcionarios}}
				<tr>
					<td>{{$tb_funcionarios.db_id_funcionario}}</td>
					<td>{{$tb_funcionarios.db_nome_completo}}</td>
					<td>{{$tb_funcionarios.db_cpf}}</td>
					<td>{{$tb_funcionarios.db_endereco}}</td>
					<td>{{$tb_funcionarios.db_telefone}}</td>
					
				</tr>
				{{/foreach}}
			</table>

			
		</div>
		<div class="mb-4">
			<center>
				
                <button class="btn btn-success para_imprimir w-25" 
                    onclick="imprimir_rel()">
                    Imprimir
                </button>
                
                <a href="index.php" 
                    class="btn btn-danger para_imprimir">
                    Cancelar
                </a>
				
			</center>
		</div>
	</div>

</div>




<script type="text/javascript">
	function imprimir_rel(){
		$(".para_imprimir").hide();
		window.print();
		$(".para_imprimir").show();
	}
</script>

<!--
<script type="text/javascript">
	$(document).ready(function(){
		$("#tb_usuario").DataTable();
	});
</script>