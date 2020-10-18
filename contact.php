<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br" class="theme-light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Typper</title>
  <link rel="icon" href="favicon.ico" type="/favicon.ico" />
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/navbar.css" type="text/css">
  <link rel="stylesheet" href="css/darkmode.css" type="text/css">
  <link rel='stylesheet' href='css/footer.css' />

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-default navbar-expand-lg navbar-light">
    <div class="navbar-header d-flex col">
      <a class="navbar-brand" href="javascript:void(0);">Typ<b>per</b></a>
      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
        <span class="navbar-toggler-icon"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
      <ul class="nav navbar-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Página inicial</a></li>
        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Loja virtual</a></li>
        <li class="nav-item"><a href="portfolio.php" class="nav-link">Portfólio</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link">Suporte</a></li>
      </ul>
      <form class="navbar-form form-inline">
        <div class="input-group search-box">
          <input type="text" id="search" class="form-control" placeholder="Pesquisar...">
          <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right ml-auto">
        <li class="nav-item">
        <?php
        if(isset($_SESSION['username']))
        {
          echo '<a class="nav-login dropdown-toggle" target="_blank" href="suporte/dashboard.php"><i class="icon-stack"></i>Admin</a>';
          echo '<li class="nav-item">
          <a href="logout.php" class="btn-primary dropdown-toggle get-started-btn mt-1 mb-1"><i class="icon-arrow-right"></i>Logout</a></li>';
        } else {
          echo '<a data-toggle="dropdown" class="nav-login dropdown-toggle" href="#">Login</a>';
            }
          ?>
          <ul class="dropdown-menu form-wrapper">
            <li>
              <form action="conexao.php" method="post">
                <p class="hint-text">Faça login com sua conta:</p>
                <div class="form-group social-btn clearfix">
                  <a href="#" class="btn btn-primary pull-left"><i class="fa fa-facebook"></i> Facebook</a>
                  <a href="#" class="btn btn-info pull-right"><i class="fa fa-twitter"></i> Twitter</a>
                </div>
                <div class="or-seperator"><b>or</b></div>
                <div class="form-group">
                  <input type="text" name="username" class="form-control" placeholder="Username" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                </div>
                <input type="submit" class="btn btn-primary btn-block" value="Login">
                <div class="form-footer">
                  <a href="#">Esqueceu sua senha?</a>
                </div>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <button id="switch" onclick="toggleTheme()">Switch</button>
</div>

<div class="container">
  <h1 class="bemvindo">Bem-vindo a nossa central de suporte</h1>
  
  <div class="gtco-section">
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-6 animate-box">
          <h3>Entre em Contato</h3>
          <form action="#">
            <div class="row form-group">
              <div class="col-md-12">
                <label class="sr-only" for="name">Nome</label>
                <input type="text" id="name" class="form-control" placeholder="Seu nome">
              </div>
              
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="sr-only" for="email">E-mail</label>
                <input type="text" id="email" class="form-control" placeholder="Seu endereço de e-mail">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="sr-only" for="message">Mensagem</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Escreve alguma coisa"></textarea>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" value="Enviar" class="btn btn-primary">
            </div>

          </form>		
        </div>
        <div class="col-md-5 col-md-push-1 animate-box">
          
          <div class="gtco-contact-info">
            <h3>Informações de Contato</h3>
            <ul>
              <li class="address">Avenida, R. Jurandir Velame, 477 - 2ª andar - Centro, Gandu - BA, 45450-000</li>
              <li class="phone"><a href="tel://73999738916">(73) 99973-8916</a></li>
              <li class="email"><a href="mailto:adimaelbr@gmail.com">adimaelbr@gmail.com</a></li>
              <li class="url"><a href="https://typper.com.br">typper.com.br</a></li>
            </ul>
          </div>


        </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- dark mode -->
  <script type="text/javascript" src="js/darkmode.js"></script>


  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

  <footer id="gtco-footer" role="contentinfo" style="background-color:#181a1b;" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="gtco-container">
    <div class="row row-pb-md">

      <div class="col-md-12 text-center">
        <div class="gtco-widget">
          <h3>Entrar em Contato</h3>
          <ul class="gtco-quick-contact">
            <li>
              <a href="javascript:void(0);">
                <i class="icon-phone"></i> (73) 99973-8916</a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <i class="icon-mail2"></i> adimaelbr@gmail.com</a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <i class="icon-chat"></i> Chat</a>
            </li>
          </ul>
        </div>
        <div class="gtco-widget">
          <h3>Redes Sociais</h3>
          <ul class="gtco-social-icons">
            <li>
              <a href="https://twitter.com/adimaelbr" target="_blank">
                <i class="icon-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/adimael.dev" target="_blank">
                <i class="icon-facebook"></i>
              </a>
            </li>
            <li>
              <a href="javascript:void(0);" target="_blank">
                <i class="icon-linkedin"></i>
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/c/Infoworkportal/" target="_blank">
                <i class="icon-youtube"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-12 text-center copyright">
        <p>
          <small class="block">&copy; 2020 typper. Todos os Direitos Reservados.</small>
          <small class="block">Desenvolvido por
            <a href="https://typper.com.br" target="_blank">typper.com.br</a>
          </small>
        </p>
      </div>
    </div>

  </div>
</footer>

</body>
</html>