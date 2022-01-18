<?php

include 'conexao.php';
include 'resize-class.php';


$nome = $_POST['txtnome'];
$sobrenome = $_POST['txtsobrenome'];
$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$cpf = $_POST['txtcpf'];
$sexo = $_POST['txtsexo'];
$status = $_POST['txtstatus'];
$tel = $_POST['txttel'];
$cargo = $_POST['txtcargo'];
$data = $_POST['txtdata'];
$endereco = $_POST['txtendereco'];
$atividade = $_POST['txtatividade'];
$recebe_foto1 = $_FILES['txtfoto1'];


$vcpf = str_replace("-", "", str_replace(".", "", $cpf));



$destino = "src/"; 


//gerando nome aleatório para imagem
// preg_match vai pegar imagens nas extensões jpg|jpeg|png|gif
// do nome que esta na variavel $recebe_foto1 do parametro name e a $extensão vai receber o formato
preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao1);

// a função md5 vai gerar um valor randomico  com base no horario "time"
// incrementar o ponto e a extensão
// função md5 é criado para gerar criptografia
$img_nome1 = md5(uniqid(time())).".".$extencao1[1];


 try {  // try para tentar inserir
    
    $inserir=$cn->query("INSERT INTO func(cd_func, status_func, cpf_func, nome_func, sobrenome_func, data_nasc, tel_func, email_func, senha_func, sexo_func, cargo_func, endereco_func, atividade_func, foto_func) VALUES (default, '$status', '$vcpf', '$nome', '$sobrenome', '$data', '$tel', '$email', '$senha', '$sexo', '$cargo', '$endereco', '$atividade', '$img_nome1')");
    
    move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1);             
    $resizeObj = new resize($destino.$img_nome1);   
    $resizeObj -> resizeImage(150, 150, 'exact');
    $resizeObj -> saveImage($destino.$img_nome1, 100);
    
    header('location:func.php');

}catch(PDOException $e) {
    
    
    echo $e->getMessage();
    
}

?>
