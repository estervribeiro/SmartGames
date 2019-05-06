
<!doctype html>
<html lang="pt-br">
    <head>
        <title>
            SmartGames - Sobre
        </title>
        <meta charset="utf-8">
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jssor.slider-27.5.0.min.js"></script>
        <script src="js/jssor.slider.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <!-- AREA MENU -->
        <div class="caixa_menu">
            <div class="header center">
                <figure id="logo">
                   <a href="index.php"><img src="imagem/logo.png" alt="SmartGames" title="SmartGames" ></a>
                </figure>
            
                <nav id="menu">
                    <ul>
                        <li><a href=index.php>Home</a></li>
                        <li><a href=sobre.php>Sobre</a></li>
                        <li><a href=lojas.php>Lojas</a></li>
                    </ul>
                </nav>
            
            </div>
        </div>
        <!-- AREA SLIDER-->
          <div class="oculta">
        </div>
        <div class="caixa_slider center">
                <?php include("slide.php")?>
        </div>
        <!-- CONTEUDO 1 //DIV MENU LATERAL-->
        <div class="conteudo1 center">
            <div class="redes_sociais">
                <figure>
                    <div> <a href="#"><img src="imagem/facebook.png" alt="facebook" title="facebook" ></a></div>
                    <div> <a href="#"><img src="imagem/insta.png" alt="insta" title="insta" ></a></div>
                    <div> <a href="#"><img src="imagem/twitter.png" alt="twitter" title="twitter" ></a></div>
                </figure>
            </div>
            <nav class="menu_lateral">
                <ul>
                    <li>Home</li>
                    <li>Jogos</li>
                    <li>Ps4</li>
                    <li>X-Box</li>
                    <li>Nintendo</li>
                    <li>Lançamentos</li>
                    <li>Comedia</li>
                    <li>Drama</li>
                    <li>Suspense</li>
                    <li>Ficçao</li>
                    <li>Aventura</li>
                    <li>Ação</li>
                    <li>Infantil</li>
                </ul>
            </nav>
        
            <div class="caixasobre"> 
                <div class="quemsomos">
                    <div class="imagem-sobre">
                    <figure>
                        <img src="imagem/logo.png" alt="SmartGames" title="SmartGames" >
                    </figure>
                    </div>
                    <div class="titulo-sobre">
                        Quem Somos
                    </div>
                    <div class="texto-sobre">
                        <p>A SmartGames é a maior e mais tradicional rede especializada em jogos do estado. A empresa entrou no mercado em 2000, e hoje, com mais de 15 anos de experiência. Para expandir a marca, iniciou em 2008 o processo de franquia e, após 6 anos, temos diversas franquias em operação nos melhores shoppings situados em São Paulo.</p>
                    </div>
                </div>
                <div class="quemsomos">
                    <div class="imagem-sobre">
                    <figure>
                        <img src="imagem/Icone-missao.png" alt="missao" title="missao" >
                    </figure>
                    </div>
                    <div class="titulo-sobre">
                        Missão
                    </div>
                    <div class="texto-sobre">
                        <p>Oferecer uma grande variedade de jogos e itens relacionados, através de um excelente atendimento em um ambiente inovador e acolhedor nas lojas físicas e site.</p>
                    </div>
                </div>
                <div class="quemsomos">
                    <div class="imagem-sobre">
                    <figure>
                        <img src="imagem/Icone-visao.png"  alt="visao" title="visao">
                    </figure>
                    </div>
                    <div class="titulo-sobre">
                        Visão
                    </div>
                    <div class="texto-sobre">
                        <p>Se tornar a principal marca especializada em jogos, tanto em sua rede de lojas quanto no e-commerce, sendo referência para o segmento no Brasil.</p>
                    </div>
                </div>
                <div class="quemsomos">
                    <div class="imagem-sobre">
                    <figure>
                        <img src="imagem/icones_valores_confianca.png" alt="valores" title="valores">
                    </figure>
                    </div>
                    <div class="titulo-sobre">
                        Valores
                    </div>
                    <div class="texto-sobre">
                        <p>Foco na satisfação do cliente.
                        Cultura como instrumento para construir uma sociedade
                        Honestidade e respeito nas relações em todos os níveis. Trabalho em equipe com competência e entusiasmo.
                        Parceria entre empresa e colaborador, para o seu desenvolvimento pessoal e profissional.
                        Inovação como estímulo para o crescimento.</p>
                    </div>
                </div>
                
             </div>
                  
        </div>

        <!-- AREA RODAPE-->
       <footer class="footer center">
            <div class="caixa_footer center">
            <figure class="logofooter">
                <a href="acme.php"><img src="imagem/logo.png" alt="SmartGames" title="SmartGames"></a>
            </figure>
            <div class="dadosDescricao">
                <h3>Contato</h3>
                <p>Av. Luis Carlos Berrini, nº 666.</p>
                <p>São Paulo - SP</p>
                <p> +55 11 6753-6564</p>
                <p>SmartGames@SmartGames.com</p>
            </div>
            <div class="dadosDescricao">
                <h3>Sobre</h3>
                <p> Quem somos</p>
                <p> Envios e Prazos</p>
                <p> Formas de Pagamento</p>
                <p> Entre em contato</p>
            </div>
            <div class="dadosDescricao">
                <h3>Minha Conta</h3>
                <p> Meus pedidos</p>
                <p> Lista de Desejos</p>
                <p> Suporte</p>
                <p> Meus filmes</p>
            </div>
              <div class="dadosDescricao">
                <h3>Localização</h3>
                <p> Como chegar?</p>
            </div>
            <div class="map"> <!-- MAPA GOOGLE -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14632.78991953255!2d-46.8592273!3d-23.525398649999996!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-PT!2sbr!4v1542489790461" allowfullscreen></iframe>
            </div>
            </div>
        </footer>
        
    </body>
</html>