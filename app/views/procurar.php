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


  <div class="banner_home banner_sobre banner_contato banner_procurar">
    <header>
      <?php require_once('templates/header.php'); ?>
    </header>


    <section class="titulo_pagina_atual">
      <article class="site">
        <div class="secao_titulo">
          <div class="titulo">
            <h4>PROC<span>URAR</span></h4>
          </div>

          <div class="secao_atual">
            <a href="index.html">HOME</a>
            <img src="img/seta_secao.svg" alt="Seção atual">
            <strong>PROCURAR</strong>
          </div>
        </div>

      </article>
    </section>


  </div>

  <section class="encontre_carro procurar_veiculo">
    <article class="site">

      <form class="form_filtros">

        <!-- Linha 1 -->
        <div class="linha_filtros">
          <select name="marca" id="marca">
            <option value="">MARCA</option>
          </select>

          <select name="modelo" id="modelo">
            <option value="">MODELO</option>
          </select>

          <select name="ano" id="ano">
            <option value="">ANO</option>
          </select>

          <select name="preco" id="preco">
            <option value="">PREÇO</option>
          </select>

          <select name="km" id="km">
            <option value="">QUILOMETRAGEM</option>
          </select>
        </div>

        <!-- Linha 2 -->
        <div class="linha_filtros">
          <select name="tipo" id="tipo">
            <option value="">TIPO</option>
          </select>

          <select name="combustivel" id="combustivel">
            <option value="">COMBUSTÍVEL</option>
          </select>

          <button type="reset" class="limpar_filtro">
            LIMPAR FILTROS
          </button>
        </div>

      </form>

      <!-- Barra inferior -->
      <div class="barra_resultados">

        <div class="abas">
          <span class="ativo">TODOS (80)</span>
          <span>NOVO (29)</span>
          <span>USADO (29)</span>
        </div>

        <div class="busca">
          <input type="text" placeholder="DIGITE UMA PALAVRA CHAVE">
          <button class="btn_busca">🔍</button>
        </div>

      </div>

    </article>
  </section>




  <section class="procurar_veiculo carros_recentes procurar_carros">
    <article class="site">
      <div class="recentes_filtro">
        <strong>100 Resultados</strong>
        <form class="form_filtros">


          <div class="linha_filtros">
            <div class="texto">
              <h4>Ordenar por:</h4>
            </div>
            <select name="ordenar" id="marca">
              <option value="">MAIS RELEVANTES</option>
              <option value="menor_preco">Menor preço</option>
              <option value="maior_preco">Maior preço</option>
              <option value="mais_novos">Mais novos (ano)</option>
              <option value="mais_antigos">Mais antigos</option>
              <option value="menor_km">Menor quilometragem</option>
              <option value="maior_km">Maior quilometragem</option>
              <option value="recentes">Anúncios mais recentes</option>
            </select>

          </div>

        </form>
      </div>


      <div class="lado_a_lado_carros_venda_men">


        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>

        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>

        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>

        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>

        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>



        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>

        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>

        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>

        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>


        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>

        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>

        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>

        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>


        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>

        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>

        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>

        <a href="">
          <div class="carro_venda_menores">
            <div class="conteudo">
              <img src="img/carro_menor.png" alt="Carro">
            </div>
            <div class="titulo_principal_carro">
              <h2>Asterion GrandSport Velocity Edition</h2>
              <div class="km_rodado">
                <div class="carro_preco">
                  <p>R$ 120.000,00</p>
                </div>
                <div>
                  <img src="img/velocimetro.png" alt="velocimetro">
                  <strong>200.000 KM</strong>
                </div>
              </div>
            </div>
            <div class="linha_branca"></div>
            <div class="info_complementares">
              <div class="ano_carro">
                <p>2025</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Automatico</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Gasolina</p>
              </div>
              <div class="info_veiculo_vendas">
                <p>Ipva pago</p>
              </div>



            </div>

            <div class="entre_em_contato">
              <strong>ENTRE EM CONTATO</strong>
            </div>




          </div>
        </a>







      </div>
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
    document.addEventListener('DOMContentLoaded', function() {

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