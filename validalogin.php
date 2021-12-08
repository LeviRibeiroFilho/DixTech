<?php 
    
    include "conexao.php";


    session_start(); //iniciando sessão 

    $vcpf1 = $_POST['txtcpf'];
    $vsenha = $_POST['txtsenha'];

    //echo $vcpf1.'<br>';
    $vcpf = str_replace("-", "", str_replace(".", "", $vcpf1));
    

    //$consulta = $cn->query("select * from func");
    //$exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
    //echo $exibeUsuario['cpf_func'].'<br>';
    //echo $vcpf.'<br>';
    //echo $exibeUsuario['senha_func'].'<br>'; 
    //echo $vsenha;
    $consulta = $cn->query("select * from func where cpf_func = '$vcpf' and senha_func = '$vsenha'");
    if($consulta->rowCount() == 1){
        $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
        if($exibeUsuario['status_func'] == 0){
            $_SESSION['ID'] = $exibeUsuario['cd_func'];
            $_SESSION['Status'] = $exibeUsuario['status_func'];
            header('location:index.php');
        }
        else{
            $_SESSION['ID'] = $exibeUsuario['cd_func'];
            $_SESSION['Status']=1;
            header('location:index.php');
        }
    }
    else{
        header('location:erro.php');
    }
?>
