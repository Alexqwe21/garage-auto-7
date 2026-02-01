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


  <div class="banner_home banner_sobre banner_contato">
    <header>
     <?php require_once('templates/header.php'); ?>
    </header>


    <section class="titulo_pagina_atual">
      <article class="site">
        <div class="secao_titulo">
          <div class="titulo">
            <h4>CON<span>TATO</span></h4>
          </div>

          <div class="secao_atual">
            <a href="index.html">HOME</a>
            <img src="img/seta_secao.svg" alt="Seção atual">
            <strong>CONTATO</strong>
          </div>
        </div>

      </article>
    </section>


  </div>

  <div class="space"></div>




  <section class="contate_nos">
    <article class="site">
      <div class="texto_contato">
        <h2>CONTATE-NOS</h2>
        <hr>
      </div>

      <div class="lado_a_lado">
        <div class="info_contato">
          <div>


            <p>Concessionária premiada, de propriedade familiar, de veículos novos e usados, com diversas filiais na
              cidade.
              Preços mais baixos e o melhor atendimento ao cliente garantidos.
            </p>
          </div>

          <div>


            <span>Avenida Marechal Tito 3654, São Paulo, Brazil 08160495</span>
          </div>

          <div>

            <strong>(125)<span>456-78901</span></strong>
          </div>

          <div>
            <a href=""><img src="img/email_preto.svg" alt="Email">auto7@garageauto7.com.br</a>
          </div>

          <div class="redes_lado_footer">
            <div>
              <a href="#"><img src="img/facebook_footer.svg" alt="instagram"></a>
            </div>
            <div>
              <a href="#"><img src="img/Instagram_foorer.svg" alt="Instagram"></a>
            </div>



          </div>

        </div>

        <div class="formulario">

          <form action="">
            <div class="linha-inputs">
              <input type="text" placeholder="NOME">
              <input type="email" placeholder="EMAIL">
              <input type="tel" placeholder="TELEFONE">
            </div>

            <textarea placeholder="MENSAGEM"></textarea>

            <div class="botao">
              <button type="submit">ENVIAR</button>
            </div>
          </form>

        </div>

    </article>
  </section>



  <section class="mapa">
    <article>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0414771206424!2d-46.40916793810649!3d-23.49501548801679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce639a41a48857%3A0xbc8827d316b76950!2sAvenida%20Marechal%20Tito%2C%203654%20-%20Jardim%20Miragaia%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008160-495!5e0!3m2!1spt-BR!2sbr!4v1767886776697!5m2!1spt-BR!2sbr"
        width="1920" height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </article>
  </section>



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