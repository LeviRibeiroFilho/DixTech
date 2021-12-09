<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Link-->
    <script src="https://kit.fontawesome.com/629ec9bdfe.js" crossorigin="anonymous"></script>

</head>
<body>

    <?php 

        session_start();
        include "conexao.php";
        

        $consulta = $cn->query("select * from func limit 4");

        include "nav.php";
    ?>

<div class="border-t mt-5 flex flex-col text-center w-full mb-5">
      <h1 class="pt-5 sm:text-3xl text-2xl font-bold title-font mb-4 text-gray-900"><i class="far fas fa-book mr-2"></i>NOSSA HISTÓRIA</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-5x1">Conheça um pouco de nossa trajetória</p>
    </div>
  <div class="border-b pb-5 container mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 w-100% h-screen">
        <div class="max-h-96 md:h-screen">
          <img class="w-screen h-screen object-cover object-top" src="https://images.pexels.com/photos/270373/pexels-photo-270373.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        </div>
        <div class="flex bg-gray-100 p-10">
          <div class="mb-auto mt-auto max-w-lg">
            <h1 class="text-3xl uppercase">Nossa História</h1>
            <p class="font-semibold mb-5">DixTech Corp.</p>
            <p>&emsp;&emsp;A Dix Tech Corporation foi criado no dia 10 de setembro de 2020 por 7 estudantes da Etec Professor Basilides de Godoy, que são: Arthur Renan, Gustavo Sousa,  João Vítor, Kaio Gomes, Luiz Felipe, Rodrigo Barreto e Thiago Galvao.<br><br> 
                                &emsp;&emsp;A nossa empresa surgiu depois de um trabalho em grupo, onde os estudantes perceberam que trabalhavam bem juntos e que poderiam fazer algo de nível mais profissional. Por isso eles decidiram criar a DixTech e criar sistemas completos para os clientes sempre com um preço justo e tempo de entrega sempre abaixo de 3 meses.</p>
          </div>
        </div>
      </div>
    </div>




</body>