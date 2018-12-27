<?php

    include_once("servidor.php");

    session_start();
?>

<html>
  <head>
    <link href="./css/bootstrap.min.css" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <link href="./estilo.css" rel="stylesheet"/>
    <meta charset="UTF-8"/>
  </head>
  
  <body>


      <nav class="navbar navbar-expand-lg mb-5 navbar-dark bg-dark">
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
            <li class="nav-item"><a class="nav-link" href=#>Login</a></li>
          </ul>
        </div>
      </div>
    </nav>



    <div class="container">

      <?php

            if(isset($_SESSION['mensagem'])){
                echo $_SESSION['mensagem'];
                unset($_SESSION['mensagem']);
            }
      ?>

      <div class="row justify-content-center">
        <div class="mt-5 mb-3">
          <h2>Entre</h2>          
        </div>
      </div>
    </div>


    <div class="row justify-content-center">
      <form action="validar.php" method="post" accept-charset="utf-8" name="form">
          <div class="col-md-12 mb-3">
            <input name="email" class="form-control"  placeholder="E-mail">
          </div>
          <div class="col-md-12">
            <input name="senha"class="form-control"type="Password" placeholder="Senha">
          </div>

          <div class=" form-row justify-content-center my-3 ml-5 col-md-8" >
            <button name="fazerLogin" class="btn bg-dark text-white" value="Submit">Entrar</button>
          </div>
      </form>

    </div>

    



















  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="./function.js"></script>
  </body>

</html>