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

  <link rel="stylesheet" href="/css/bootstrap-select.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap-select.js"></script>
  <script src="js/message.js"></script>
  <script src="js/script.js"></script>
  <script src="js/paginacao.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
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
      <a class="navbar-brand" href="#">Typ<b>per</b></a>
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
        <li class="nav-item"><a href="noticias.php" class="nav-link">Notícias</a></li>
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
          <a data-toggle="dropdown" class="nav-login dropdown-toggle" href="#">Login</a>
          <ul class="dropdown-menu form-wrapper">
            <li>
              <form action="/examples/actions/confirmation.php" method="post">
                <p class="hint-text">Faça login com sua conta:</p>
                <div class="form-group social-btn clearfix">
                  <a href="#" class="btn btn-primary pull-left"><i class="fa fa-facebook"></i> Facebook</a>
                  <a href="#" class="btn btn-info pull-right"><i class="fa fa-twitter"></i> Twitter</a>
                </div>
                <div class="or-seperator"><b>or</b></div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" required="required">
                </div>
                <input type="submit" class="btn btn-primary btn-block" value="Login">
                <div class="form-footer">
                  <a href="#">Esqueceu sua senha?</a>
                </div>
              </form>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <ul class="dropdown-menu form-wrapper">
            <li>
              <form action="/examples/actions/confirmation.php" method="post">
                <p class="hint-text">Preencha este formulário para criar sua conta!</p>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Confirm Password" required="required">
                </div>
                <div class="form-group">
                  <label class="checkbox-inline"><input type="checkbox" required="required"> Eu aceito os <a href="#">Termos &amp; Condições</a></label>
                </div>
                <input type="submit" class="btn btn-primary btn-block" value="Cadastrar">
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
  <h1 class="bemvindo">Bem-Vindo ao nosso Blog</h1>

  <!-- dark mode -->
  <script type="text/javascript" src="js/darkmode.js"></script>
  <div class="post">
      <a href="contact.php"><img src="images/tess.png" alt="robot"></a>
      <ul class="post-user">
       <li>Tess Robots</li>
      </ul>
      <ul class="post-desc">
        <li>
          <div id="result"></div>
        </li>
      </ul>
      <a href="contact.php"><div class="btnsuport">
        <button>Central de Suporte</button>
      </div></a>
  </div>
</div>
  <div align="justify" class="mut-panel post-panel">
    <div class="dt-public">Publicado em 21-Jun-2020 11:29:21</div>
    
    <div class="columnsContainer">

      <div class="leftColumn">
          <h2>Left Column (fluid)</h2>

          <p align="justify"><img class="imgpost" src="images/post1.png" alt="Sample photo" align="left"> Bacon ipsum dolor sit amet capicola ball tip beef ribs leberkas, turkey biltong salami shoulder ribeye. Leberkas chuck cow andouille kevin ribeye pork strip steak pork chop beef ribs beef ball tip corned beef. Leberkas prosciutto brisket, short ribs salami cow sirloin chicken. Bacon pork belly bresaola tenderloin biltong leberkas. Strip steak beef leberkas sirloin, venison turkey hamburger kevin. Drumstick chicken ground round t-bone flank fatback jerky ball tip. Jerky ribeye sirloin t-bone.</p>

              <p align="justify">Tongue prosciutto pork ball tip ham hock, meatball sirloin brisket kielbasa biltong doner shoulder bresaola. Chuck beef ribs biltong, kielbasa ground round swine andouille corned beef. Venison hamburger tongue shank. Leberkas doner pork chop sausage kielbasa pancetta, biltong brisket pastrami tenderloin boudin filet mignon sirloin cow meatloaf. Ham ball tip bacon pork belly sirloin.</p>

              <p align="justify">Shoulder pig short ribs, salami chicken venison bresaola. Frankfurter meatball pork chop pork loin, turkey strip steak kielbasa pork belly drumstick shank prosciutto. Pork chicken ground round, sirloin tri-tip ham hock pork chop cow meatloaf pork loin bresaola turkey. Prosciutto hamburger pork short ribs flank tri-tip chicken pig bacon meatloaf t-bone shankle doner. Bresaola doner spare ribs biltong jowl boudin, tri-tip pork leberkas ham hock filet mignon.</p>

              <p align="justify">Leberkas strip steak shoulder meatball, flank biltong shank fatback ball tip swine prosciutto hamburger. Jerky frankfurter drumstick, ham ham hock hamburger kevin kielbasa salami chuck. Flank rump beef cow, beef ribs meatball ball tip jowl bacon pork chop. Biltong tongue pork chop hamburger. Frankfurter tri-tip pancetta pork chop venison t-bone andouille beef ribs salami boudin meatball doner spare ribs. Brisket pork chop pig kielbasa jerky chuck pork belly beef meatball boudin short loin. Doner jerky andouille ham meatloaf prosciutto kevin pork belly short loin pancetta.</p>

              <p align="justify">Corned beef spare ribs hamburger pork tenderloin flank pork loin beef ribs sausage brisket chicken venison bacon short loin sirloin. Ribeye tail short ribs andouille kevin chicken shankle meatloaf, corned beef rump sirloin t-bone chuck tongue. Swine venison tongue, sirloin turducken drumstick bresaola strip steak rump. Kevin ham hock meatball tri-tip. Ground round leberkas pig beef salami strip steak meatball beef ribs. Chicken ball tip rump, short loin bresaola pork t-bone jerky jowl pork chop tail chuck sausage prosciutto.</p>
      </div>

      <div class="rightColumn">
          <h2>Right Column</h2>

          <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated corpse, cricket bat max brucks terribilem incessu zomby. The voodoo sacerdos flesh eater, suscitat mortuos comedere carnem virus. Zonbi tattered for solum oculi eorum defunctis go lum cerebro. Nescio brains an Undead zombies. Sicut malus putrid voodoo horror. Nigh tofth eliv ingdead.</p>
      </div>

  </div>
    
  </div>
      <br>

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
              <a href="#">
                <i class="icon-phone"></i> (73) 99973-8916</a>
            </li>
            <li>
              <a href="#">
                <i class="icon-mail2"></i> adimaelbr@gmail.com</a>
            </li>
            <li>
              <a href="#">
                <i class="icon-chat"></i> Chat</a>
            </li>
          </ul>
        </div>
        <div class="gtco-widget">
          <h3>Redes Sociais</h3>
          <ul class="gtco-social-icons">
            <li>
              <a href="https://twitter.com/hcodebr">
                <i class="icon-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/hcodebr">
                <i class="icon-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/company/grupo-hcode/">
                <i class="icon-linkedin"></i>
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/channel/UCjWENuSH2gX55-y7QSZiWxA">
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