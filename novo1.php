<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Bootstrap Card</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
		
	</head>
	
	<style>
		
		.relogio {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		}
		body{
		background-color:#343A40;
		}
	</style>
	
	<body> 
		
		<div class="container-fluid">
			<br>
			<div class="row">
				<div class="col-sm-3"><br>
					<div class="card" style="color:#fff; background-color:black;">
						<div class="card-body">
							<p class="card-text"> <center> 
								<?php
									$hoje = date('d/m/Y');
									echo $hoje; 
								?>
							</center> </p>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6"><br>
					<div class="card" style="color:#fff; background-color:black;">
						<div class="card-body">
							<p class="card-text"> <center> CGH DIVISA <center> </p>
							</div>
							</div>
						</div>
						
						<div class="col-sm-3"><br>
							<div class="card" style="color:#fff; background-color:black;">
								<div class="card-body">
									<p class="card-text"> <center> 
										<div class="relogio">
											<div class="display">00:00:00</div>
										</div>
										<center> </p>
									</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-6"><br>
									<div class="card" style="background-color:black; color:#fff;">
										<div class="card-body">
											<p class="card-text"> <center>
												<?php 
						include 'conexao1.php';
						
						$sql = "select grupo,hora_ini,hora_fim data,usina, observacao from agenda_operacional where data=current_date() and usina = 'cgh ponte caida' and grupo = 'ug1'";
						
						$consulta = mysqli_query($conexao, $sql);
						
						while ($dados = mysqli_fetch_array($consulta)) {
							
							$hora3 = $dados['observacao'];
							
							
						?>

????????????<?php echo $hora3; ?>
							
							if($hora3 == 'INDISPON??VEL'){
								echo'INDISPON??VEL';
							}else{
								echo'DISPON??VEL';
								}
								
							
							?>
						
					<?php }; ?>
					
													</center> </p>
													</div>
													</div>
													</div>
													
													<div class="col-sm-6"><br>
													<div class="card" style="background-color:black; color:#fff;">
													<div class="card-body">
													<p class="card-text"> <center> 
													INDISPON??VEL
													<center> </p>
													</div>
													</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-sm-6"><br>
														<div class="card" style="background-color:black;">
															<div class="card-body">
															<div class="card-title" style="color:#fff;">
															
															Gera????o:
															
															</div>
																<p class="card-text"> <center>
																	
																	
																	
																	<?php 
																		include 'conexao1.php';
						
						$sql = " select ug1_pot_ativa,hora,data from usina_cgh_caxambu where data=CURRENT_DATE() ORDER BY hora DESC LIMIT 1";
						
						$consulta = mysqli_query($conexao, $sql);
						
						while ($dados = mysqli_fetch_array($consulta)) {
							$hora = $dados['hora'];
							$pot = $dados['ug1_pot_ativa'];
							$data = $dados['data'];
							
							
						?>
						
						
						
						
						<div class="container">
							
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table">
    <thead>
      <tr>
        <th> Hora </th>
        <th> Pot??ncia </th>
        <th> Data </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <?php echo $hora ?> </td>
        <td> <?php  echo $pot ?> </td>
        <td> <?php  echo $data ?> </td>
      </tr>
      <tr>
       
    </tbody>
  </table>
</div>
						
					<?php }; ?>

																	
																</center> </p>
															</div>
														</div>
													</div>
													
													<div class="col-sm-6"><br>
														<div class="card" style="background-color:black;">
															<div class="card-body">
																<p class="card-text"> <center> 
																	<iframe src ="real.php"  frameborder="0" width="100%" ; height="440px" ;></iframe>
																	<center> </p>
																</div>
																</div>
															</div>
															
															
															
															
															
															<div class="col-sm-3"><br>
																<div class="card" style="color:#fff; background-color:black;">
																	<div class="card-body">
																		<p class="card-text"> <center> 
																			<iframe src ="semi.php"  frameborder="0"  width="" ; height="440px" ;></iframe>
																		</center> </p>
																	</div>
																</div>
															</div>
															
															<div class="col-sm-6"><br>
																<div class="card" style="color:#fff; background-color:black;">
																	<div class="card-body">
																		<p class="card-text"> <center> 
																			<iframe src ="geracao_colun.php"  frameborder="0"  width="100%" ; height="440px" ;></iframe>
																			<center> </p>
																		</div>
																		</div>
																	</div>
																	
																	<div class="col-sm-3"><br>
																		<div class="card" style="color:#fff; background-color:black;">
																			<div class="card-body">
																				<p class="card-text"><center> 
																					<iframe src ="semi.php"  frameborder="0"  width="" ; height="440px" ;></iframe>  
																				</center></div>
																			</p>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="row">
																<div class="col-sm-6"><br>
																	<div class="card" style="color:#fff; background-color:black;">
																		<div class="card-body">
																			<p class="card-text"> <center> 
																				<iframe src ="semi.php"  frameborder="0"  height="175px" ;></iframe>
																				<center> </p>
																			</div>
																			</div>
																		</div>
																		
																		<div class="col-sm-6"><br>
																			<div class="card" style="color:#fff; background-color:black;">
																				<div class="card-body">
																					<p class="card-text"> <center> 
																						<iframe src ="semi.php"  frameborder="0" height="175px";></iframe>
																						<center> </p>
																					</div>
																					</div>
																				</div>
																				
																				<div class="col-sm-12"><br>
																					<div class="card" style="color:#fff; background-color:black;">
																						<div class="card-body">
																							<div class="card-text">
																								<iframe src ="dados1.php"  frameborder="0" width="100%"; height="570px";></iframe>
																							</div>
																						</div>
																					</div>
																				</div>
																				
																			</div>
																			
																		</div>
																	</body>
																	
																	
																	
																	<script>
																		function atualizarTempo(){
																		var display = document.querySelector('.display');
																		
																		var agora = new Date();
																		
																		var horario = corrigirHorario(agora.getHours()) + ':' + corrigirHorario(agora.getMinutes()) + ':' + corrigirHorario(agora.getSeconds());
																		
																		display.textContent = horario;
																		}
																	
																	function corrigirHorario(numero){
																	if (numero < 10) {
																	numero = '0' + numero;
																	}
																	return numero;
																	}
																	
																	atualizarTempo();
																	setInterval(atualizarTempo, 1000);
																	
																	console.log(horario);
																	
																	</script>
																	</html>															
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																																		