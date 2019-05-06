
<!doctype html>
<html lang="pt-br">
    <head>
        <title>
            SmartGames - Nossas Lojas
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
                        <li><a href=index.php>Home </a></li>
                        <li><a href=sobre.php>Sobre</a></li>
                        <li><a href=lojas.php>Lojas</a></li>
                    </ul>
                </nav>
            
            </div>
        </div>
        <div class="oculta">
        </div>
        <!-- AREA SLIDER-->
        <div class="caixa_slider center">
                <?php include("slide.php")?>
        </div>
        <!-- CONTEUDO 1 //DIV MENU LATERAL-->
        <div class="conteudo1 center">
            <div class="redes_sociais">
                <figure>
                   <div> <a href="#"><img src="imagem/facebook.png" alt="facebook" title="facebook"></a></div>
                    <div> <a href="#"><img src="imagem/insta.png" alt="insta" title="insta" ></a></div>
                    <div> <a href="#"><img src="imagem/twitter.png" alt="twitter" title="twitter"></a></div>
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
                <div class="caixa_lojas">
                <div class="loja center">
                    <div class="unidade center">
                        <h2>Unidade - Alphaville</h2>
                    </div>
                    <div class="endereco">
                       <h2>SHOPPING ANÁLIA FRANCO</h2>
                        <p> Av. Regente Feijó, 1739 - Loja TL-132/133 - Nível Tulipa - Jardim Anália Franco</p>
                        <p> (11) 4446-3949 </p>
                    </div>
                    <figure class="loja-fisica">
                        <img src="imagem/loja1.jpg" alt="loja1" title="loja1">
                    </figure>
                </div>
                 <div class="loja center">
                    <div class="unidade center">
                        <h2>Unidade - Pinheiros</h2>
                    </div>
                    <div class="endereco">
                       <h2>SHOPPING ELDORADO</h2>
                        <p> Av. Rebouças, 3970 - Loja 343E/344E - 2º Piso - Pinheiros</p>
                        <p> (11) 5546-3649 </p>
                    </div>
                    <figure class="loja-fisica">
                        <img src="imagem/loja2.JPG" alt="loja2" title="loja2">
                    </figure>
               </div>
                <div class="loja center">
                    <div class="unidade center">
                        <h2>Unidade - São Paulo</h2>
                    </div>
                    <div class="endereco">
                       <h2>SHOPPING CIDADE SÃO PAULO</h2>
                        <p>Av. Paulista, 1230 - Loja 1111/1112 - Piso 01 - Bela Vista</p>
                        <p> (11) 9946-3538 </p>
                    </div>
                    <figure class="loja-fisica">
                        <img src="imagem/loja3.jpg" alt="loja3" title="loja3">
                    </figure>
                </div> 
                <div class="loja center">
                    <div class="unidade center">
                        <h2>Unidade - Ribeirão Preto</h2>
                    </div>
                    <div class="endereco">
                       <h2>RIBEIRÃO SHOPPING</h2>
                        <p>Av. Coronel Fernando Ferreira Leite, 1540 - loja 154 - Nível Califórnia - Jd Califórnia</p>
                        <p> (11) 4856-2288 </p>
                    </div>
                    <figure class="loja-fisica">
                        <img src="imagem/locadora_280411.jpg" alt="locadora" title="locadora">
                    </figure>
                </div> 
        </div>
        </div>

        <!-- AREA RODAPE-->
        <footer class="footer center">
            <div class="caixa_footer center">
            <figure class="logofooter">
                <a href="index.php"><img src="imagem/logo.png" alt="smartgames" title="smartgames"></a>
            </figure>
            <div class="dadosDescricao">
                <h3>Contato</h3>
                <p>Av. Luis Carlos Berrini, nº 666.</p>
                <p>São Paulo - SP</p>
                <p> +55 11 6753-6564</p>
                <p>acme@acme.com</p>
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