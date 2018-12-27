<?php

	include_once("servidor.php");
	session_start();

	/*if(!empty($_POST['email']) && !empty($_POST['senha'])){
		header("Location:cadastro.php");
		$_SESSION['mensagem2'] = "<div class='alert alert-success'>Cadastro feito com sucesso!</div>";
		exit();
	}
	{
		header("Location:cadastro.php");
		$_SESSION['mensagem2'] = "<div class='alert alert-danger'>Campos obrigatórios em branco.</div>";
		exit();
	}*/


	if(isset($_POST['cadastrar'])){
		if(!empty($_POST['email']) && !empty($_POST['senha'])){

			header("Location:cadastro.php");
			$_SESSION['mensagem2'] = "<div class='alert alert-success'>Cadastro feito com sucesso!</div>";

			$email=mysqli_real_escape_string($conn, $_POST['email']);
			$senha=mysqli_real_escape_string($conn, $_POST['senha']);

			$comando = "INSERT INTO usuario(email ,senha) VALUES ('$email' , '$senha')";
			$enviar = mysqli_query($conn , $comando);

			

			/*if($enviar){
				$_SESSION['email'] = '$email';
				header("location:cadastro.php");
				
			}else{
				header("location:cadastro.php");
			}
			*/

		}else{
			header("Location:cadastro.php");
			$_SESSION['mensagem2'] = "<div class='alert alert-danger'>Campos obrigatórios em branco</div>";
		}
		
	}
?>
