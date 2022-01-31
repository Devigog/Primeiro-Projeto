<?php
	include('connect.php');
    $nome = $_POST['NomeUsuario'];
    $sobrenome = $_POST['SobrenomeUsuario'];
    $sexo = $_POST['SexoUsuario'];
    $estado = $_POST['EstadoUsuario'];
    $email = $_POST['EmailUsuario'];
    $senha = $_POST['SenhaUsuario'];
	$insert = "INSERT INTO usuario(NomeUsuario, SobrenomeUsuario, SexoUsuario, EstadoUsuario, EmailUsuario, SenhaUsuario) VALUES('$nome', '$sobrenome', '$sexo', '$estado', '$email', '$senha');";
	$busca = "SELECT IDUsuario, EmailUsuario FROM usuario where EmailUsuario = '$email'";
	$result = mysqli_query($conexao,$busca);
	$cont = mysqli_num_rows($result);
	
    if(isset($_POST['finalizar']) and empty($nome) or empty($sobrenome) or empty($sexo) or empty($estado) or empty($email) or empty($senha)) {
		
		echo "<script type='text/javascript'>alert('Todos os campos devem ser preenchidos');window.location.href='form-cadastro.html'</script>";
		
	}else{
		
		if(strstr($nome, "@") == false){
			
		echo "<script type='text/javascript'>alert('O campo email deve ser preenchido corretamente!');window.location.href='form-login.html'</script>";
		
		}else{
			if($cont == 1) {
		
			echo "<script type='text/javascript'>alert('Email j? cadastrado!');window.location.href='form-cadastro.html'</script>";
			
			}else{
			$sql = mysqli_query($conexao,$insert);
			echo "<script type='text/javascript'>alert('Cadastro realizado com sucesso!');window.location.href='form-login.html'</script>";
			
			}
		}
	}