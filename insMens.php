<?php

include 'conexao.php';



$nome = $_POST['nome_mens'];
$email = $_POST['email_mens'];
$cel = $_POST['cel_mens'];
$mensagem = $_POST['mens_mens'];
$data = date('Y-m-d');










try {  // try para tentar inserir
    
    $inserir=$cn->query("INSERT INTO fale_conosco(id_mens, nome_mens, email_mens, tel_mens, mensagem_mens, data_mens) VALUES (default, '$nome', '$email', '$cel', '$mensagem', '$data')");
    
    header('location:index.php');

}catch(PDOException $e) {
    
    
    echo $e->getMessage();
    
}

?>