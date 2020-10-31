<?php
include("includes/header.php");
?>
<body>
  
  <?php
  include("includes/nav.php");
  ?>

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