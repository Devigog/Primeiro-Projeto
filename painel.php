<?php
	include('verifica.php');
?>

	<div align="center"><center>
	
		<h2>Bem-vindo, <?php echo $_SESSION['EmailUsuario'];?></h2>
	
		<p><em><h4>Cadastre sua empresa. <a href="form-cadastro-empresa.php">Clique aqui!</a></h4></em></p>
	
		<p><em><h4>Veja onde estão as empresas cadastradas. <a href="form-consulta.php">Clique aqui!</a></h4></em></p>
	
		<h4><a href="logout.php">Sair</a></h4>
	</center></div>