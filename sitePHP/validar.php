<?php
	include_once("servidor.php");
	session_start();

	if(empty($_POST['email']) || empty($_POST['senha'])){
		header("Location:login.php");
		$_SESSION['mensagem'] = "<div class='alert alert-danger'>Campos obrigatórios em branco.</div>";
		exit();
	}

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$senha = mysqli_real_escape_string($conn,$_POST['senha']);

	$comando = "SELECT * FROM usuario WHERE email = '$email' AND senha ='$senha'";
	$result = mysqli_query($conn , $comando);

	$row = mysqli_num_rows($result);

	if($row == 1){
		$_SESSION['email'] = '$email';
		header("Location:download.php");
		//$_SESSION['logado'] = "<div>TA logado</div>";
	}else{
		header("Location: login.php");
		$_SESSION['mensagem'] = "<div class='alert alert-danger'>Dados Incorretos. Tente novamente.</div>";
	}


?>
