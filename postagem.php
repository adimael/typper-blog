<?php
include("includes/header.php");
?>

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
        <li class="nav-item"><a href="portfolio.php" class="nav-link">Portfólio</a></li>
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
          <div id="result2">Olá! Sou a Tess, estou aqui para lhe ajudar. Qualquer duvida clique sobre mim para que você seja direcionado para nossa página de suporte.</div>
        </li>
      </ul>
      <a href="contact.html"><div class="btnsuport">
        <button>Central de Suporte</button>
      </div></a>
  </div>

<?php
	if(isset($_GET['id'])){
		$idUrl = $_GET['id'];
	}
	$sql = "SELECT * from tb_postagens WHERE id=:id LIMIT 1";
	try{
		$resultado = $conexao->prepare($sql);
		$resultado->bindParam('id',$idUrl, PDO::PARAM_INT);
		$resultado->execute();
		$contar = $resultado->rowCount();
		
		if($contar > 0 ){
			while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){

        $data2 = implode('/', array_reverse(explode('-', $exibe->data)));
?>

</div>
  <div align="justify" class="mut-panel post-panel">
    <div class="dt-public">Publicado em <strong><?php echo $data2;?></strong></div>
    
    <div class="columnsContainer">

      <div class="leftColumn">
          <h2><?php echo $exibe->titulo;?></h2>

          <p align="justify"><img class="imgpost" alt="Sample photo" align="left" src="images/postagens/<?php echo $exibe->imagem;?>"<?php echo ($exibe->texto)?></p>

              
      </div>
    
  </div>

  <?php
}//while
	}else{
		echo '<li>Não existe post cadastrados no sistema</li>';
	}
				
	}catch(PDOException $erro){ echo $erro;}
?>

      <br>

      <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://typper.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

  <?php
  include("includes/footer.php");
  ?>

</body>
</html>