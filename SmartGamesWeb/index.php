
<?php

//conexão com o banco 
require_once('bd/conexao.php');
$conexao = conexaoMysql();


?>


<!doctype html>
<html lang="pt-br">
    <head>
        <title>
            Smart Games
        </title>
        <meta charset="utf-8">
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jssor.slider-27.5.0.min.js"></script>
        <script src="js/jssor.slider.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <!-- AREA MENU -->
        <div class="caixa_menu center">
            <div class="header center">
                <figure id="logo">
                   <a href="index.php"><img src="imagem/logo.png" alt="smartgames" title="samrtgames" ></a>
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
            
            
            <div class="caixa_catalogo">
                <!--  codigo php para puxar dados do banco -->
                <?php 
                    
                    $sql ="SELECT * FROM tbl_jogos";
                
                    //pegando os dados do banco e retornando eles em uma matriz de dados
                    $select = mysqli_query($conexao, $sql);
            
                    while($rsjogos = mysqli_fetch_array($select)){
                ?>
                
                <div class="catalogo">
                    <figure class="imagem_filme">
                        <img src="<?php echo($rsjogos['imagem']);?>" alt="Aranhaverso" title="Aranhaverso" >
                     </figure>
                    
                    <div class="descricao">
                        
                        <p class="titulo-preco"> <?php echo($rsjogos['nome']); ?> </p>
                        
                        <p><?php echo($rsjogos['descricao']); ?></p>
                        
                        <p class="titulo-preco"> R$ <?php echo($rsjogos['preco']); ?></p>
                        
                        <p class="detalhes">Detalhes</p>
                        
                    </div>
                
                </div>
                
                <?php
                    }
                ?>
                
            </div>
        </div>

        <!-- AREA RODAPE-->
       <footer class="footer center">
            <div class="caixa_footer center">
            <figure class="logofooter">
                <a href="index.php"><img src="imagem/logo.png" alt="smartgames" title="smartgames" ></a>
            </figure>
            <div class="dadosDescricao">
                <h3>Contato</h3>
                <p>Av. Luis Carlos Berrini, nº 666.</p>
                <p>São Paulo - SP</p>
                <p> +55 11 6753-6564</p>
                <p>smartgames@smartgames.com</p>
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
                <p> Meus Jogos</p>
            </div>
              <div class="dadosDescricao">
                <h3>Localização</h3>
                <p> Como chegar?</p>
            </div>
            <div class="map"> <!-- MAPA GOOGLE -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14632.78991953255!2d-46.8592273!3d-23.525398649999996!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-PT!2sbr!4v1542489790461"  allowfullscreen></iframe>
            </div>
            </div>
        </footer>
        
    </body>
</html>