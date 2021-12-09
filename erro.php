<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DixTech</title>
    <link rel="icon" type="imagem/png" href="src/dtico.ico" />

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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Link-->
    <script src="https://kit.fontawesome.com/629ec9bdfe.js" crossorigin="anonymous"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js%22%3E"></script>
    <script src="jquery.mask.js"></script>
    <script>

    $(document).ready(function(){
    $("#cpf").mask("000.000.000-00");

    });


    </script>
</head>
<body>



<?php
  include 'conexao.php';
  include 'nav.php';

  $consulta = $cn->query('select * from func');
  $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

?>


<!-- Formulário de login usando Tailwind -->

<div class="min-h-full flex justify-center align-middle py-20 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">
      <span class="text-xl inline-block mr-5 align-middle">
        <i class="fas fa-bell"></i>
      </span>
      <span class="inline-block align-middle mr-8">
        <b class="capitalize">Erro!</b> Login ou senha incorretos!
      </span>
    </div>
    <img class ="mx-auto h-40 w-auto" src="src/error.png">
    <h5 class="text-center font-normal">Clique <a href="login.php">aqui</a> para tentar novamente</h3>
  </div>
</div>


</body>
</html>