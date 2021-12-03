<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>🏠 - DixTech</title>

    <!-- CSS Links (TailWind) -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Google Fotns Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Link-->
    <script src="https://kit.fontawesome.com/629ec9bdfe.js" crossorigin="anonymous"></script>

</head>
<body>

    <?php 

        session_start();
        include "conexao.php";
        

        //$consulta = $cn->query("select * from func where cd_func = '$_SESSION[ID]'");
        //$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

        include "nav.php";

        $cd_excluir = $_GET['cd'];
    ?>

    <p class="text-center text-gray-600 mt-10">Digite sua senha para confirmar a exclusão do Usuário</p>
    <div>
      	<form method="post" action="excluir.php?user=<?php echo $_SESSION['ID'] ?>&cd_excluir=<?php echo $cd_excluir ?>" class="m-4 flex justify-center">
        	<input type="password" name="senha_conf" class="rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white" placeholder="Senha"/>
    		<button type="submit" class="px-8 rounded-r-lg bg-red-400  text-gray-100 font-bold p-4 uppercase border-red-500 border-t border-b border-r my-0">Enviar</button>
    	</form>
    </div>
    <p class="text-center text-red-300 mt-6 ">*Esta ação é irreversível!</p>


</body>