
<div class="col-md-10">
	
    <div class="card ">
            <div class="card-header text-white bg-primary text-center">
                Relatório de Usuários - {{$data_atual}}
            </div><br>

		<div class="card-body" width="95%">
			<table id="tb_usuario" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<th>ID</th>
					<th>Nome</th>
					<th>Usuário</th>
					
				</thead>
				{{foreach from=$array_usuarios item=tb_usuario}}
				<tr>
					<td>{{$tb_usuario.db_id_usuario}}</td>
					<td>{{$tb_usuario.db_nome_completo}}</td>
					<td>{{$tb_usuario.db_usuario}}</td>
					
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