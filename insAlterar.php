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
$cd_func = $_GET['cd'];


$vcpf = str_replace("-", "", str_replace(".", "", $cpf));

if(empty($cd_func)){
    header('location:func.php');
};

$consulta = $cn->query("select foto_func from func where cd_func = '$cd_func'");
$exibir = $consulta->fetch(PDO::FETCH_ASSOC);



$destino = "src/"; 

if(!empty($recebe_foto1['name'])) {

preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao1);
$img_nome1 = md5(uniqid(time())).".".$extencao1[1];

$upload_foto=1;

} else {

    $img_nome1 = $exibir['foto_func'];
    $upload_foto=0;
}


try {  // try para tentar inserir
    
    $alterar=$cn->query("update func set 

    status_func = '$status', 
    cpf_func = '$vcpf', 
    nome_func = '$nome', 
    sobrenome_func = '$sobrenome', 
    data_nasc = '$data', 
    tel_func = '$tel', 
    email_func = '$email', 
    senha_func = '$senha', 
    sexo_func = '$sexo', 
    cargo_func = '$cargo', 
    endereco_func = '$endereco', 
    atividade_func = '$atividade', 
    foto_func = '$img_nome1'
    
    where cd_func='$cd_func' ");

    if($upload_foto == 1){
    
    move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1);             
    $resizeObj = new resize($destino.$img_nome1);   
    $resizeObj -> resizeImage(150, 150, 'exact');
    $resizeObj -> saveImage($destino.$img_nome1, 100);


    }
    
    header('location:func.php');

}catch(PDOException $e) {
    
    
    echo $e->getMessage();
    
}

?>
