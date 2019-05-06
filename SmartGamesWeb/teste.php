<?php
//Conexão com o banco
require_once('bd/conexao.php');
$conexao = conexaoMysql();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head><!--Cabeçalho-->
        <script src="js/slider.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset= "utf-8">
         <script src="js/modal.js"></script>
        <title>Home</title>
        
        <!--Código modal-->
        <script>
            
            $(document).ready(function(){
                
                $('.btn_detalhes').click(function(){
                    
                   $('#container').fadeIn(500);
                    
                });
                
             }); 
                
            function visualizarDados(idItem){
               
                $.ajax({
                    type: "GET",
                    url: "modal.php",
                    data: {codigo: idItem},
                    success: function (dados){
                        $('#modal').html(dados); 
                        
                    }
                });
            }                
                  
        </script>
    </head>    
    <body><!--Corpo-->
        <div id="container"><!--modal-->
            <div id="modal" class="center">
            
            </div>        
        </div>
            <header><!--Cabeçalho corpo-->
                <div id="div_menu">
                    <div id="cont_menu" class="center">
                        <div id="div_logo"></div>
                        <nav>
                            <ul class="formatacao_li">                
                                <li class="formatacao_li"><a href="index.php">Home</a></li>
                                <li class="formatacao_li"><a href="lojas.php">Nossas lojas</a></li>
                                <li class="formatacao_li"><a href="sobre.php">Sobre a Loja</a></li>
                            </ul>
                        </nav>
                       <div id="rede_social">
                            <img class="social" src="icon/instagram.png" alt="Instagram" title="Instagram">
                            <img class="social"  src="icon/facebook.png" alt="Facebook" title="Facebook">
                            <img class="social"  src="icon/twitter.png" alt="Twitter" title="Twitter">         
                        </div>
                    </div>
                </div>
            </header>
            <div id="slider" class="center"><!--Slider-->
                <?php include 'slider.php';  ?>
            </div>
               <div id="div_produto" class="center">
                   <?php /*Código de seleção do banco*/
                        $sql = "SELECT j.nome, j.preco, j.imagem, jl.codigo
                                FROM tbl_jogo j
                                INNER JOIN tbl_jogo_loja jl
                                ON j.cod_jogo = jl.cod_jogo;";
                        $select = mysqli_query($conexao, $sql);                 
                        //mysql_fetch_array transforma uma lista 
                        //de retorno do banco de dados em uma matriz de dados
                        while($rsjogos = mysqli_fetch_array($select)){                    
                    ?><!--Conteúdo da página-->
                   <div class="cont_produto cont">
                        <div class="img_cont">
                            <img src="<?php echo($rsjogos['imagem']);?>" alt="Jogo" title="Jogo">
                        </div>
                        <div class="produto_desc">
                           <p>Nome: <?php echo($rsjogos['nome']);?></p>
                           <p>Preço: <?php echo($rsjogos['preco']);?></p>                        
                        </div>
                        <div class="btn_detalhes" onclick="visualizarDados(<?php echo($rsjogos['codigo']);?>)" >Detalhes</div>
                    </div>
                   <?php
                        
                        }
                    ?>
                </div>
            <footer><!--Rodapé-->
                <div id="div_footer"  class="center">
                    <div id="marca_footer" class="center">
                        <div id="marca_logo"></div>
                        <div id="marca_nome">Smart Games Ltda.</div> 
                    </div>
                    <div id="text_footer" class="center">
                        <p>2019  LORGA E DAMATO COMERCIO  DE JOGOS ELETRONICOS LTDA - CNPJ 89.255.255/0013-00.&copy;</p>
                        <p>OS PREÇOS ANUNCIADOS NESTE SITE PODEM SER ALTERADOS SEM PRÉVIO AVISO.</p>
                        <p>AS FOTOS CONTIDAS NESTA PÁGINA SÃO MERAMENTE ILUSTRATIVAS DO PRODUTO E PODEM VARIAR DE ACORDO COM O FORNECEDOR.</p>
                    </div>
                     <div id="forma_pagamento" class="center">
                        <img class="pagamento" alt="American Express" title="American Express" src="icon/americanexpress.ico">
                        <img class="pagamento" alt="MasterCard" title="MasterCard" src="icon/mastercard.ico">
                        <img class="pagamento" alt="PayPal" title="PayPal" src="icon/paypal.ico"> 
                        <img class="pagamento" alt="Visa" title="Visa" src="icon/visa.ico"> 
                    </div>                    
                </div>
            </footer> 
    </body>
</html>