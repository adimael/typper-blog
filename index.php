<?php
include("includes/header.php");
?>
<body>
  
  <?php
  include("includes/nav.php");
  ?>

  <div class="container">
    <button id="switch" onclick="toggleTheme()">Switch</button>
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
      <article class="content">
        <img src="images/post.png" alt="Sample photo">
        <div class="text">
          <h3>Card 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, excepturi?</p>
          <button onclick="window.location.href = 'postagem.php'">ver post</button>
        </div>
      </article>
      <article class="content">
        <img src="images/post1.png" alt="Sample photo">
        <div class="text">
          <h3>Card 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, excepturi?</p>
          <button onclick="window.location.href = 'postagem.php'">ver post</button>
        </div>
      </article>
      <article class="content">
        <img src="images/posts.png" alt="Sample photo">
        <div class="text">
          <h3>Card 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, excepturi?</p>
          <button onclick="window.location.href = 'postagem.php'">ver post</button>
        </div>
      </article>
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

</body>
</html>