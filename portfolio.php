<?php
include("includes/header.php");
?>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets_portfolio/css/styles.css">

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
        <li class="nav-item"><a href="store.php" class="nav-link">Loja virtual</a></li>
        <li class="nav-item active"><a href="portfolio.php" class="nav-link">Portfólio</a></li>
        <li class="nav-item"><a href="suporte.php" class="nav-link">Suporte</a></li>
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
                <div id="error"><?php include("error.php") ?></div>
                <div class="form-group">
                  <input type="text" name="username" class="form-control" placeholder="Username" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                </div>
                <input type="submit" class="btn btn-primary btn-block" value="Login">
                <div class="form-footer">
                  <a href="javascript:void(0);">Esqueceu sua senha?</a>
                </div>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
  <button class="btn btn-action mr-5" type="button" onclick="toggleTheme()"><i class="fa fa-moon-o" aria-hidden="true"></i><span class="sr-only">Toggle dark mode</span></button>
</div>

<div class="container">
<div class="post">
      <a href="contact.php"><img style="padding:40px;" src="assets_portfolio/images/adimael_dev.png" alt="robot"></a>
      <ul class="portfolio-user">
       <li style="margin-left: 190px; margin-top: -150px;">Adimael DevOps</li>
      </ul>
      <ul class="portfolio-desc">
        <li>
          <div id="result2" style="margin-left: 180px; list-style-type: none;">Olá! Meu nome é Adimael, Sou Profissional em T.I.</div>
        </li>
      </ul>
      <a href="contact.html"><div class="btnsuport">
        <a class="btn btn-cta-primary pull-right" href="mailto:adimaelbr@gmail.com?Subject=Hello%20Hossain"><i class="fa fa-paper-plane"></i> Contate-me</a>
        <br>
      </div></a>
  </div>
  
  <div class="container sections-wrapper">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">Sobre mim</h2>
                        <div class="content">
                            <p>Sou um desenvolvedor apaixonado que sempre gosta de projetos e desafios interessantes. Amo trabalhar na web, mobile e tecnologias relacionadas.</p>

                            <p>Também adoro passar o tempo me mantendo atualizado com notícias de tecnologia e gadgets. Nas horas vagas, gosto de utilizar o tempo para aprender novas tecnologias ou procurar por projetos para aprimorar meu conhecimento.</p>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

                <section class="latest section">
                    <div class="section-inner">
                        <h2 class="heading">Ultimos Projetos</h2>
                        <div class="content">

                            <div class="item featured text-center"><!-- featured item-->
                                <h3 class="title"><a href="https://github.com/amardeshbd/android-police-brutality-incidents#google-play-submission-update" target="_blank"><i class="fa fa-users"></i> Fincorp - Controle de estoque e venda</a></h3>
                                <p class="summary">Projeto desenvolvido utilizando as linguagens de programação PHP7 & JAVASCRIPT.</p>
                                <div class="featured-image">
                                    <a href="https://github.com/amardeshbd/android-police-brutality-incidents#google-play-submission-update" target="_blank">
                                        <img class="img-responsive project-image" src="assets_portfolio/images/projects/fincorp_login.png" alt="2020 Police Brutality Incidents during the 2020 George Floyd protests">
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">New</div>
                                    </div>
                                </div>

                                <div class="desc text-left">
                                    <p>Projeto ainda em fase inicial de desenvolvimento. Segue a lista abaixo das funcionalidades já implementadas:</p>

                                    <blockquote>
                                    ---> BANCO DE DADOS
                                        <br>Conexão com Mysql
                                    <br>
                                    <br>
                                    ---> LOGIN, REGISTRAR
                                    <br>Registrar Nova Conta;
                                    <br>Login com conta existente;
                                    <br>Deslogar da conta;
                                    <br>Diferentes níveis de acesso; 
                                    <br>Gerenciamento de funcionários;
                                    <br>
                                    <br>
                                    ---> CADASTROS
                                    <br>Cadastro, edição & exclusão de categorias;
                                    <br>Cadastro, edição & exclusão de produtos;
                                    <br>Abertura & fechamento de orçamentos;
                                    <br>Abertura & finalização de ordem de serviço;

                                    </blockquote>
                                </div><!--//desc-->
                                <a class="btn btn-cta-secondary" href="https://github.com/adimael/fincorp" target="_blank"><i class="fa fa-github"></i> Contribua no GitHub</a>
                            </div><!--//featured item-->

                            <div class="item featured text-center"><!-- featured item-->
                                <h3 class="title"><a href="https://play.google.com/store/apps/details?id=com.hossainkhan.vision" target="_blank"><i class="fa fa-television"></i> Projeto VMFRP</a></h3>
                                <p class="summary">VMFRP é um projeto web desenvolvido com foco na área de manutenção de celular, reunindo ferramentas para ajudar Profissionais na reparação e manutenção do sistema operacional Android.</p>
                                <div class="featured-image">
                                    <a href="https://play.google.com/store/apps/details?id=com.hossainkhan.vision"
                                       target="_blank">
                                        <img class="img-responsive project-image"
                                             src="assets_portfolio/images/projects/vmfrp.png"
                                             alt="H.K. Vision Muzei Plugin for Android">
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">Beta</div>
                                    </div>
                                </div><!--//featured-image-->
                                <a class="btn btn-cta-secondary"
                                   href="https://play.google.com/store/apps/details?id=com.hossainkhan.vision"
                                   target="_blank"><i class="fa fa-download"></i> Contribua no GitHub</a>

                            </div><!--//featured item-->


                            <!-- ========================================================================= -->
                            <!-- Example for fully featured project with links -->
                            <!-- Keeping this example as latest feature project can't have links -->
                            <!-- ========================================================================= -->

                            <!--<div class="item featured text-center">&lt;!&ndash; featured item&ndash;&gt;-->
                                <!--<h3 class="title"><a href="https://play.google.com/store/apps/details?id=info.hossainkhan.dailynewsheadlines" target="_blank"><i class="fa fa-television"></i> Daily Headlines</a></h3>-->
                                <!--<p class="summary">An Android&trade; TV application to skim through news headlines.</p>-->
                                <!--<div class="featured-image">-->
                                    <!--<a href="https://play.google.com/store/apps/details?id=info.hossainkhan.dailynewsheadlines" target="_blank">-->
                                        <!--<img class="img-responsive project-image" src="assets_portfolio/images/projects/news_headlines_tv_banner.png" alt="Daily Headlines - Android TV">-->
                                    <!--</a>-->
                                    <!--<div class="ribbon">-->
                                        <!--<div class="text">New</div>-->
                                    <!--</div>-->
                                <!--</div>-->

                                <!--<div class="desc text-left">-->
                                    <!--<p>&quot;Daily Headlines&quot; was created as result of personal need to check daily news headlines on <i class="fa fa-television"></i> TV rather than watching video clips from YouTube or other different source. This was also a personal experiment on creating Android TV application which is somewhat different than what Android TV applications are meant to be.</p>-->
                                    <!--<p>The application is Open Source and available in <i class="fa fa-github-alt"></i> Github</p>-->
                                <!--</div>&lt;!&ndash;//desc&ndash;&gt;-->
                                <!--<a class="btn btn-cta-secondary" href="https://play.google.com/store/apps/details?id=info.hossainkhan.dailynewsheadlines" target="_blank"><i class="fa fa-download"></i> Get it from Google Play&trade;</a>-->
                                <!--<a class="btn btn-cta-secondary" href="https://github.com/amardeshbd/android-daily-headlines" target="_blank"><i class="fa fa-github"></i> Clone from Github</a>-->
                            <!--</div>&lt;!&ndash;//featured item&ndash;&gt;-->


                            <!-- ========================================================================= -->
                            <hr class="divider"><!-- divider between featured and non-featured items -->
                            <!-- ========================================================================= -->

                            <!--<div class="item row">-->
                            <!--    <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">-->
                            <!--        <img class="img-responsive project-image" src="assets_portfolio/images/projects/project-5.png" alt="project name">-->
                            <!--    </a>-->
                            <!--    <div class="desc col-md-8 col-sm-8 col-xs-12">-->
                            <!--        <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">Atom - Designed for Mobile Apps</a></h3>-->
                            <!--        <p>You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>-->
                            <!--        <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>-->
                            <!--    </div>&lt;!&ndash;//desc&ndash;&gt;-->
                            <!--</div>&lt;!&ndash;//item&ndash;&gt;-->

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FMundo-Tecnologia-Inform%25C3%25A1tica%2F411171202331909%3Fref%3Dbookmarks&amp;width=285&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:285px;" allowtransparency="true"></iframe>
                                <li style="color: #fff"><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>Gandu, Bahia, Brasil</li>
                                <li><i class="fa fa-envelope"></i><span class="sr-only">Email:</span><a href="mailto:adimaelbr@gmail.com?Subject=Hello%20there">adimaelbr@gmail.com</a></li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="#">typper.tk</a></li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//aside-->

                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Habilidades</h2>
                        <div class="content">
                            <p class="intro">
                            Inicialmente comecei com tecnologias mobile e depois migrei para a solução web. Trabalhei em soluções híbridas e nativas para diferentes formatos de dispositivos Android.</p>
                            <p><i class="fa fa-hand-o-up"></i> <u>Toque no nível de <b>habilidade</b></u> para obter mais detalhes.</p>

                            <div class="skillset">

                                <div class="item">
                                    <h3 class="level-title">Linguagem PHP<span
                                            class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true"
                                            title="Started working on kotlin since it's official support announced at Google I/O 2017"><i class="fa fa-info-circle" aria-hidden="true"></i> Iniciante</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="54%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Linguagem Javascript<span
                                            class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true"
                                            title="Actively trying to learn different Jetpack components. Recently worked with AppCompat, Android KTX, Multidex, Test, Data Binding, Lifecycles,
                                            Paging, ViewModel, Media & playback, Notifications, Permissions, Preferences, Animation & transitions, Layout, Navigation, TV"><i class="fa fa-info-circle" aria-hidden="true"></i> Iniciante</span>
                                    </h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="45%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->


                                <div class="item">
                                    <h3 class="level-title">Linguagem Java<span
                                            class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true"
                                            title="I have experience over working with Jenkins Piplelines, Github Actions, Circle CI, Travis CI, Microsoft AppCenter."><i class="fa fa-info-circle" aria-hidden="true"></i> Iniciante</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="34%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                            </div>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading">Educação</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i>Segurança da informação</h3>
                                <h4 class="university">Universidade de Brasília <span class="year">(2017-2018)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading">Certificação</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i>Curso de PHP7 completo</h3>
                                <h4 class="university">Hcode <span class="year">(18/04/2020 - 19/06/2020)</span></h4>
                                <p><img class="img-responsive university" src="assets_portfolio/images/certificate_php7.png" alt="Associate Android Developer Certificate"></p>
                                <p><a class="more-link" href="https://hcode.com.br/certificates/202006PHP700005EECD20BE963B" target="_blank"><i class="fa fa-external-link"></i>Ver Certificado Digital</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i>Curso de Javascript completo</h3>
                                <h4 class="university">Hcode <span class="year">(2019 - 2020)</span></h4>
                                <p><img class="img-responsive university" src="assets_portfolio/images/aad_certificate_small.png" alt="Associate Android Developer Certificate"></p>
                                <p><a class="more-link" href="https://hcode.com.br/certificates/202003JSFULL005E623B07F1658" target="_blank"><i class="fa fa-external-link"></i>Ver Certificado Digital</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i>Curso de HTML5 completo</h3>
                                <h4 class="university">Hcode <span class="year">(29/03/2020 - 08/05/2020)</span></h4>
                                <p><img class="img-responsive university" src="assets_portfolio/images/certificado-html5.png" alt="Associate Android Developer Certificate"></p>
                                <p><a class="more-link" href="https://hcode.com.br/certificates/202004HTML50005EA9D6F7BF5AB" target="_blank"><i class="fa fa-external-link"></i>Ver Certificado Digital</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i>Segurança da informação</h3>
                                <h4 class="university">Hcode <span class="year">(2017 - 2018)</span></h4>
                                <p><img class="img-responsive university" src="assets_portfolio/images/certificate_security.png" alt="Associate Android Developer Certificate"></p>
                                <p style="color: red"><i class="fa fa-external-link"></i>Certificado Digital indisponível</p>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->


            </div><!--//secondary-->
    </div><!--//masonry-->
  
  <!-- dark mode -->
  <script type="text/javascript" src="js/darkmode.js"></script>
  <!-- Javascript -->
  <script src="assets_portfolio/plugins/jquery-1.11.3.min.js"></script>
    <script src="assets_portfolio/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets_portfolio/plugins/jquery-rss/dist/jquery.rss.min.js"></script>
    <!-- custom js - initializes RSS, Github Calendar, Skills and so on -->
    <script src="assets_portfolio/js/main.js"></script>

  <?php
  include("includes/footer.php");
  ?>

</body>
</html>