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

  <?php
  include("includes/footer.php");
  ?>

</body>
</html>