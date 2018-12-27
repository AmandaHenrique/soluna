<?php
	include_once("servidor.php");
	session_start();
?>

<!DOCTYPE>
<html>
	<head>
	 	<link href="./css/bootstrap.min.css" rel="stylesheet"/>
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
		<link href="./estilo.css" rel="stylesheet"/>
		<meta charset="UTF-8"/>
	</head>
	
	<body>


    	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    		<div class="container">
	  			 <a class="navbar-brand mr-5" href="home.html"><!--Colocar minha marca-->Soluna</a>
	  			 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
	   		 		<span class="navbar-toggler-icon"></span> <!-- nao serve para nada -->
	  			</button>

	  		<div class="collapse navbar-collapse" id="navbarSite">

	  			<ul class="navbar-nav mr-auto">
	  				<li class="nav-item mr-2"> <a class="nav-link" href="home.html">Home</a></li>
	  				<li class="nav-item mr-2"> <a class="nav-link" href="aboutus.html">Sobre</a></li>
	  				<li class="nav-item mr-2"> <a class="nav-link" href="contactus.php">Contatos</a></li>



	  				<li class="nav-item dropdown mr-2"> 
	  					<a class="nav-link dropdown-toggle" id="navbarOptions" data-toggle="dropdown" href="#">Mídia</a>
	  					<div class="dropdown-menu" aria-labelledby="navbarOptions">
	  						<a class="dropdown-item bg-transparent text-dark" href="pictures.html">Fotos</a>
	  					</div>
	  				</li>
	  			</ul>

	  			<ul class="navbar-nav ml-auto">
	  				<li class="nav-item mr-3"><a class="nav-link" href="cadastro.php">Registre-se</a></li>
	  				<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
	  			</ul>
  			</div>
  		</div>

		</nav>


		<div class="container">

			<?php

            	if(isset($_SESSION['mensagem3'])){
                	echo $_SESSION['mensagem3'];
                	unset($_SESSION['mensagem3']);
            }
    		?>


			<div class="row justify-content-center">
				<div class=" mt-5 text-center">
					<h2>Nos contate</h2>
					<p class="text-muted">Rua chinfrudim 412<br>
						(11) 98587-7758
					</p>
				</div>
			</div>
			<hr>

			<div class="row justify-content-center">
				<form method="post" action="submitMSG.php" accept-charset= "utf-8" >
					<div class="form-row mb-3">
						<input type="text" name="emailA" class="form-control" placeholder="E-mail"></input>
					</div>

					<div class="form-row mb-3">
						<input type="text" name="assuntoA" class="form-control" placeholder="Assunto"></input>
					</div>

					<div class="form-row mb-3">
						<textarea class="form-control" name="mensagemA" placeholder="Digite sua mensagem" rows="5"></textarea>
					</div>

					<div class="form-row mb-5 justify-content-center">
						<button type ="Submit"	name="enviarMensagem" class="btn bg-dark text-white">Enviar</button>
					</div>
				</form>
			</div>


		</div>






				<footer class="page-footer font-small bg-dark text-white">
					<div class="container">
						<div class="row justify-content-center">
							 <div class="col-mb-2 mr-5 mb-3">
          						<h6 class="text-uppercase font-weight-bold mt-4">
            					<a href="aboutus.html" class="text-white">Sobre</a>
         						</h6>
        					</div>

							 <div class="col-mb-2 mr-5 mb-3">
          						<h6 class="text-uppercase font-weight-bold mt-4">
            					<a href="contactus.php" class="text-white">Contatos</a>
         						</h6>
        					</div>

        					<div class="col-mb-2 mr-5 mb-3 ">
        						<h6 class="text-uppercase font-weight-bold mt-4">
        							<a href="cadastro.php" class="text-white">Registre-se</a>
        						</h6>
        					</div>
						</div>
						

						<hr>
						<div class="footer-copyright text-center">© 2018 Copyright:
      						<a href="#"> Soluna</a>
    					</div>

					</div>
				</footer>

		</div>







	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="./function.js"></script>
	</body>

</html>