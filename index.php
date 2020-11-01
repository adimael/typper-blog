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
        <li class="nav-item active"><a href="index.php" class="nav-link">Página inicial</a></li>
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
    <button id="switch" onclick="toggleTheme()">Dark mode 😎</button>
</div>

<div class="container">
  <h1 class="bemvindo">Bem-Vindo ao nosso Blog</h1>
  <!-- dark mode -->
  <script type="text/javascript" src="js/darkmode.js"></script>
  <?php
  include("includes/tess.php")
  ?>
  
</div>
  <div class="mut-panel prof-panel">
    <h3>Postagens recents:</h3>
    <div class="container" id="jar">
    <main class="grid">

      <!--LISTAR TODOS as postagens -->

<?php


if(isset($_GET['buttonPesquisar']) and $_GET['txtpesquisar'] != ''){
    $produto = $_GET['txtpesquisar'] . '%';
    $query = "select * from tb_produtos where id_user = $_SESSION[id_user]  order by produto asc"; 
}else if(isset($_GET['buttonPesquisarCPF']) and $_GET['txtpesquisarcpf'] != ''){
    $produto = $_GET['txtpesquisarcpf'];
    $query = "select * from tb_produtos where cpf = '$produto'  order by produto asc"; 
}

else{ 
$query = "select * from tb_postagens WHERE id = id order by titulo ASC"; 
}

    $result = mysqli_query($conn, $query);
    //$dado = mysqli_fetch_array($result);
    $row = mysqli_num_rows($result);

if($row == ''){

    echo "<h3> Não existem dados cadastrados no banco </h3>";

}else{

?>

<?php 

while($res_1 = mysqli_fetch_array($result)){
    $id = $res_1["id"];
    $titulo = $res_1["titulo"];
    $texto = $res_1["texto"];
    $img = $res_1["imagem"];
    $dt_registro = $res_1["data"];

    $dt_registro2 = implode('/', array_reverse(explode('-', $dt_registro)));

?>

      <article class="content">
      <div><?php echo "<img src='images/postagens/".$img."' alt='Sample photo'"; ?></div>
        <div class="text">
          <h3><?php echo $titulo; ?></h3>
          <p> <?php echo limitarTexto($texto, $limite=176) ?></p>
        <div class="text">
        <button onclick="window.location.href = 'postagem.php?id=<?php echo $id;?>'">ver post</button>
        </div>
      </article>

      <?php 
        }                        
      ?>
      <?php 
          }                        
      ?>


    </main>
  </div>
    <nav aria-label="...">
      <ul class="pagination">
        <li id="previous-page"><a href="javascript:void(0)" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
      <li class="current-page active"><a href="javascript:void(0)">1</a></li><li class="current-page"><a href="javascript:void(0)">2</a></li><li class="current-page"><a href="javascript:void(0)">3</a></li><li id="next-page"><a href="javascript:void(0)" aria-label="Next"><span aria-hidden="true">»</span></a></li></ul>
    </nav>
  </div>
      <br>

  <?php
  include("includes/footer.php");
  ?>

<script src="js/message.js"></script>

</body>
</html>