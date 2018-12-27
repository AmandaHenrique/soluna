<?php

	include_once("servidor.php");
	session_start();

	if(isset($_POST['enviarMensagem'])){
		if(!empty($_POST['emailA']) && !empty($_POST['assuntoA']) && !empty($_POST['mensagemA'])){

			header("Location:contactus.php");
			$_SESSION['mensagem3'] = "<div class='alert alert-success mt-5'>Sua mensagem foi enviada</div>";

			$email = mysqli_real_escape_string($conn, $_POST['emailA']);
			$assunto = mysqli_real_escape_string($conn, $_POST['assuntoA']);
			$mensagem = mysqli_real_escape_string($conn, $_POST['mensagemA']);

			$comando2 = "INSERT INTO mensagens(email, assunto, mensagem) VALUES ('$email' , '$assunto' , '$mensagem')";

			$enviar = mysqli_query($conn , $comando2);
		
	}else{
		header("Location: contactus.php");
		$_SESSION['mensagem3'] = "<div class='alert alert-danger mt-5'>Dados obrigatórios em branco</div>";
	}
}
	


	/*if(isset($_POST['enviarMensagem'])){
		if(!empty($_POST['emailA']) && !empty($_POST['assuntoA']) && !empty($_POST['mensagemA'])){

			header("Location:contactus.php");
			$_SESSION['mensagem3'] = "<div class='alert alert-success mt-5'>Sua mensagem foi enviada</div>";

		}else{
			header("Location:contactus.php");
			$_SESSION['mensagem3'] = "<div class='alert alert-danger mt-5'>Campos obrigatórios em branco</div>";
		}
		
	}*/
?>