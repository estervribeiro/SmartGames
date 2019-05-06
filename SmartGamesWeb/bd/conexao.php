<?php  
function conexaoMysql(){
    $conexao = null;
    $server = "localhost";
    $user = "root";
    $password ="bcd127";
    $database = "db_smartgames";
    $conexao = mysqli_connect($server,$user,$password,$database);
        
    return $conexao;

}
?>