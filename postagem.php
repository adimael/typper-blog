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