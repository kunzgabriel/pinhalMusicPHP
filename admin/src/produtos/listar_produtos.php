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
			<h1>Produtos Cadastrados</h1>
		</div>
		<div id="breadcrumb">
			<a href="../dashboard/dashboard.php" title="Pagina Inicial" class="tip-bottom"><i class="icon-home"></i> Início</a>
			<a href="#" class="current">Produtos Cadastrados</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<form id="frm_cad" name="frm_cad" method="post" class="form-horizontal" action="edt_dado.php" enctype="multipart/form-data">
						<div class="widget-box">
							<div class="widget-title">
								<h5>Produtos Cadastrados</h5>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered data-table">
									<thead>
										<tr>
											<th style="width: 10%;">Codigo</th>
											<th style="width: 60%;">Descricao</th>
                                            <th style="width: 15%;">Imagem Externa</th>
										</tr>
									</thead>
									<tbody>
										<?php
										require "../../conecta.php";

										$sql = mysqli_query($con, "select * from produtos order by proCodigo asc");									
										while ($listagem = mysqli_fetch_array($sql)) {
											$proCodigo = $listagem['proCodigo'];
											$proDescricao = $listagem['proDescricao'];
											$proImagemExterna = $listagem['proImagemExterna']
											
											?>
											<tr class="grade_">
												<td style="font-size: 32px;text-align: center; vertical-align: middle;"><?php echo $proCodigo ?></td>
												<td style="font-size: 32px;text-align: center; vertical-align: middle;"><?php echo $proDescricao ?></td>
												<td style="font-size: 32px;text-align: center; vertical-align: middle;"><img src="<?php echo $proImagemExterna ?>" alt="Imagem Externa" height="200px" width="200px"></td>
												<td>
													<a class="btn btn-big btn-primary" href="editar_produto.php?proCodigo=<?php echo $proCodigo ?>"/><i class='icon-edit icon-white'></i> Editar</a>
													<a class="btn btn-big btn-danger" href="excluir_produto.php?proCodigo=<?php echo $proCodigo ?>" onclick='return confirm("Deseja Remover o registro selecionado?");'><i class='icon-remove-circle icon-white'></i> Excluir</a>
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
