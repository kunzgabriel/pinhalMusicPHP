<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php
	include ("../../inc/inc_base_header.php");
	?>
</head>
<body>
	<?php
	include ("../../inc/inc_header.php");
	?>
	<div id="content">
		<div id="content-header">
			<h1>Lista de Usuários</h1>
		</div>
		<div id="breadcrumb">
			<a href="../dashboard/dashboard.php" title="Pagina Inicial" class="tip-bottom"><i class="icon-home"></i> Início</a>
			<a href="list_cad.php" class="current">Listar Usuários</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<form id="frm_cad" name="frm_cad" method="post" class="form-horizontal" action="edt_dado.php" enctype="multipart/form-data">
						<div class="widget-box">
							<div class="widget-title">
								<h5>Lista de Usuários</h5>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered data-table">
									<thead>
										<tr>
											<th>ID</th>
											<th>Nome</th>
											<th>Login</th>
										</tr>
									</thead>
									<tbody>
										<?php
										require "../../conecta.php";

										$sql = mysqli_query($con, "select * from usuarios order by id asc");									
										while ($listagem = mysqli_fetch_array($sql)) {
											$id = $listagem['id'];
											$nome = $listagem['nome'];
											$login = $listagem['login'];
											
											?>
											<tr class="grade_">
												<td><?php echo $id ?></td>
												<td><?php echo $nome ?></td>
												<td><?php echo $login ?></td>
											
												<td>
													<a class="btn btn-small btn-primary" href="edt_usuario.php?id=<?php echo $id ?>"/><i class='icon-edit icon-white'></i> Editar</a>
													<a class="btn btn-small btn-danger" href="exc_usuario.php?id_exc=<?php echo $id ?>" onclick='return confirm("Deseja Remover o registro selecionado?");'><i class='icon-remove-circle icon-white'></i> Excluir</a>
												</td>
											</tr>
											

											<?php
										}
										;
										?>
									</tbody>
								</table>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
	include ("../../inc/inc_base_footer.php");
	?>
	<script src="../../js/jquery.dataTables.min.js"></script>
	<script src="../../js/unicorn.tables.js"></script>
</body>
</html>
