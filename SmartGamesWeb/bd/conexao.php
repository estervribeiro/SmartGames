<?php  
function conexaoMysql(){
    $conexao = null;
    $server = "localhost";
    $user = "root";
    $password ="";
    $database = "db_smartgames";
    $conexao = mysqli_connect($server,$user,$password,$database);
        
    return $conexao;

}
?>