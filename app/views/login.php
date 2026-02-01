<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once('templates/head.php'); ?>
</head>


<body>


   <button id="back-to-top" title="Voltar para o Topo"><img src="img/seta_para_cima.svg" alt="seta"></button>


  <a href="https://api.whatsapp.com/send?phone=5511912345494" target="_blank" class="whatsapp-fixo"
    aria-label="Fale conosco pelo WhatsApp">
    <img src="img/whatsapp_Flutuante.svg" alt="WhatsApp" />
  </a>


  <div class="banner_home banner_sobre banner_contato banner_procurar banner_info_veiculo banner_login">
    <header>
       <?php require_once('templates/header.php'); ?>
    </header>

  </div>


  <section class="login_carro">
    <article class="site">
      <div class="login">
        <div class="forms">
          <div class="lado_a_lado_login">
            <form action="/login/login" method="POST">
              <h2>Faça login na sua conta.</h2>
              <p>Bem-vindo(a) de volta! Faça login na sua conta.</p>
              <label for="username">Usuário:</label>
              <input type="email" id="email" name="email" required>

              <label for="password">Senha:</label>
              <input type="password" id="senha" name="senha" required>

              <button type="submit" class="entrar">Entrar</button>
            </form>
            <div class="destaque_login">
              <div class="texto">
                <h3>LOGIN DO FUNCIONÁRIO</h3>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>


    </article>
  </section>


  <footer>
   <?php require_once('templates/footer.php'); ?>
  </footer>

  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <script src="js/carrosel_info_veiculo.js"></script>
  <script src="js/menu_suspenso.js"></script>
  <script src="js/caroosel_listagem_rel.js"></script>
  <script src="js/carrosel.js"></script>
  <script src="js/caroosel_listagem_rel.js"></script>
  <!-- SLICK -->
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function () {

  const linksMenu = document.querySelectorAll('nav ul li a');
  let paginaAtual = window.location.pathname.split('/').pop(); // pega só a última parte da URL

  // se estiver na raiz, considera 'home'
  if (paginaAtual === '') {
    paginaAtual = 'home';
  }

  linksMenu.forEach(link => {
    const href = link.getAttribute('href');

    // remove classe active de todos
    link.classList.remove('active');

    // marca apenas o link correspondente
    if (href === paginaAtual) {
      link.classList.add('active');
    }
  });

});
</script>




 <script src="js/back-to-top.js"></script>


</body>

</html>