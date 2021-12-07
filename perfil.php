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
    <script> 
    $(document).ready(function(){
    $("#tel").mask("(00) 00000-0000");

    });
    </script>

</head>
<body class="bg-gray-100">
<?php 

    session_start();

    if(empty($_SESSION['ID'])){
      header('location:index.php');}
    include "conexao.php";
    
    
    
    //include "resize-class.php";
    include "nav.php";

    

    if(empty($_GET['cd'])){
      $cd_func = $_GET['cd_f'];
    } else {
      $cd_func = $_GET['cd'];
    }
    
    $consulta = $cn->query("select * from func where cd_func = '$cd_func'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
    

    //$resizeObj = new resize('src/006.png');
    //$resizeObj -> resizeImage(150, 150, 'auto');
    //$resizeObj -> saveImage('src/006.png', 100);
?>

<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
<main class="profile-page">
  <section class="relative block h-500-px">
    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('src/bg_perfil.jpg');
          ">
      <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>
    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
      <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </section>
  <section class="relative py-16 bg-blueGray-200">
    <div class="container mx-auto px-4">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
        <div class="px-6">
          <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
              <div class="relative">
                <img alt="..." src="src/<?php echo $exibe['foto_func'] ?>" class="shadow-xl rounded-full h-150 align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
              <div class="py-6 px-3 mt-32 sm:mt-0">

                <?php if($_SESSION['Status'] == 1){ ?>
                  <button class="bg-gray-500 uppercase text-white font-normal hover:shadow-md shadow text-xs px-3 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear" type="button">
                    <a href="alterar.php?cd_f= <?php echo $exibe['cd_func'] ?> "><i class="fas fa-pen mr-2 fa-lg text-blueGray-700"></i>Editar</a>
                  </button>
                <?php }; ?>
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-1">
              
              <?php if($exibe['status_func'] == 1){ ?>
              <button class="cursor-default bg-green-500 uppercase text-white font-normal text-xs mt-6 px-3 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear" type="button">
                Administrador
              </button>
              <?php }; ?>

            </div>
          </div>
          <div class="text-center mt-12">
            <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
              <?php echo $exibe['nome_func'] ?>
            </h3>
            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
              <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                <?php echo $exibe['endereco_func'] ?> 
            </div>
            <div class="mb-2 text-blueGray-600 mt-10">
              <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i><?php echo $exibe['cargo_func'] ?>
            </div>
            <div class="mb-2 text-blueGray-600">
              <i class="fas fa-at mr-2 text-lg text-blueGray-400"></i><?php echo $exibe['email_func'] ?>
            </div>
            <div class="mb-2 text-blueGray-600">
              <i class="fas fa-phone-alt mr-2 text-lg text-blueGray-400"></i><?php echo $exibe['tel_func'] ?>
            </div>
          </div>
          <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
            <div class="flex flex-wrap justify-center">
              <div class="w-full lg:w-9/12 px-4">

                  
              <?php if($_SESSION['Status'] != 1){ ?>
                  <div class="flex items-center w-full pt-4 mb-4">
                    <button class="mx-auto w-40 py-2 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "><i class="fas fa-lock mr-1 text-lg text-white-500"></i> Ver tudo </button>
                  </div>
                <?php } else { ?>


                  <a href="perfil_comp.php?cd=<?php echo $cd_func ?>"><div class="flex items-center w-full pt-4 mb-4">
                    <button class="mx-auto w-40 py-2 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Ver tudo </button>
                  </div></a>

                <?php }?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
</main>

</body>