<?php
	session_start();
	include('connect.php');
	
	if(empty($_POST['EmailUsuario']) or empty($_POST['SenhaUsuario'])) {
		echo "<script type='text/javascript'>alert('Os campos email e senha devem ser preenchidos');window.location.href='form-login.html'</script>";
	}
	
	$login = mysqli_real_escape_string($conexao,$_POST['EmailUsuario']);
	$senha = mysqli_real_escape_string($conexao,$_POST['SenhaUsuario']);
	
	$query = "SELECT SenhaUsuario, EmailUsuario FROM usuario WHERE EmailUsuario = '$login' and SenhaUsuario = '$senha'";
	
	$result = mysqli_query($conexao,$query);
	$row = mysqli_num_rows($result);
	
	if($row == 1) {
		$_SESSION['EmailUsuario'] = $login;
		header('location: painel.php');
		exit();
	}else{
		$_SESSION['nao_autenticado'] = true;
		echo "<script type='text/javascript'>alert('Email ou senha incorreto!');window.location.href='form-login.html'</script>";
	}
?>