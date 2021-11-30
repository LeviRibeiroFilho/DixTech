<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>🏠 - DixTech</title>

    <!-- CSS Links (TailWind) -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/main.css">
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
<body class="bg-gray-100">
<?php 

    session_start();

    if(empty($_SESSION['Status'])){
      header('location:index.php');
  }
    include "conexao.php";
    
    $consulta = $cn->query('select * from func');
    
   
    include "nav.php";
?>

<!-- This example requires Tailwind CSS v2.s0+ -->
<div class="flex flex-col mx-10 my-10">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nome
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Informações
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Atividade
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>

          <?php while( $exibe = $consulta->fetch(PDO::FETCH_ASSOC)){  ?>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="src/<?php echo $exibe['foto_func'] ?>" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      <a href="funcinfo.php"><?php echo $exibe['nome_func'] ?></a>
                    </div>
                    <div class="text-sm text-gray-500">
                      <?php echo $exibe['cargo_func'] ?>
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"><?php echo $exibe['email_func'] ?></div>
                <div class="text-sm text-gray-500"><?php echo $exibe['endereco_func'] ?></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                
                  <?php
                  $ativ = $exibe['atividade_func'];

                  if($ativ != 0){ ?> 
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> 
                      Ativo
                    </span>
                  <?php } else { ?>
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"> 
                      Inativo
                    </span>
                  <?php } ?>
              </td>

              <?php

              $stats = $exibe['status_func'];
              if($stats != 0){ ?> 
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Administrador
              </td>
              <?php } else { ?>  
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Funcionário
              </td> 
              <?php } ?>     


              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                <a href="editar.php"><i style='font-size:20px; color:gray;  margin-right:20%;' class="fas fa-pen"></i></a>
                <a href="excluir.php"><i style='font-size:20px; color:red;' class="fas fa-trash"></i></a>
                
              </td>
            </tr>
          </tbody>
          <?php }; ?>

        
        </table>
      </div>
    </div>
  </div>
</div>




</body>