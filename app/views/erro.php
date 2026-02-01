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


  <div class="banner_home banner_sobre banner_contato  banner_404">
    <header>
      <?php require_once('templates/header.php'); ?>
    </header>


    <section class="titulo_pagina_atual">
      <article class="site">
        <div class="secao_titulo">
          <div class="titulo">
            <h4>Ops! Essa página não foi encontrada.</h4>
          </div>

          <div class="secao_atual">

            <strong>404</strong>
          </div>
        <div class="hr_div">
          <hr>
        </div>
        <a href="home">Voltar à página inicial</a>
        </div>
      
      </article>
    </section>


  </div>









  <footer>
  <?php require_once('templates/footer.php'); ?>
  </footer>

  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <script src="js/back-to-top.js"></script>

  <script src="js/menu_suspenso.js"></script>

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




</body>

</html>