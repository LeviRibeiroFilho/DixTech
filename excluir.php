<?php 

include 'conexao.php';


$cd = $_GET['user'];
$cd_excluir = $_GET['cd_excluir'];
$senha_conf = $_POST['senha_conf'];
echo $senha_conf;
echo $cd;
echo $cd_excluir;

$consulta_senha = $cn->query("select senha_func from func where cd_func = '$cd'");
$exibe_senha = $consulta_senha->fetch(PDO::FETCH_ASSOC);

if($senha_conf == $exibe_senha['senha_func']){
    $excluir = $cn->query("delete from func where cd_func='$cd_excluir'");


    header('location:func.php');
}
else {

    echo "errou";
};





?>