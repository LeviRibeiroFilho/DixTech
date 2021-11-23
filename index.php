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
        include "conexao.php";
        include "nav.html";

        $consulta = $cn->query('select news_email, news_email_id from news_letter');
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC)


    ?>
    


<div class="bg-black">

    <div class="jumbotron jumbotron-fluid" style="background-image: url(src/teste.jpg); background-size: cover; height: 75vh; opacity:0.9;">
      <div class="container">
        <h1 class="display-4" style="color: white; font-family: 'Nunito', sans-serif; font-weight: 700;  ">Juntos </br> construimos </br> seus sonhos</h1>
        <p class="lead" style="color: white; font-family: 'Nunito', sans-serif;">Este é um jumbotron modificado que ocupa todo o espaço horizontal de seu elemento pai.</p>

        <button class="bg-white hover:bg-blue-500 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded-full shadow">
          Button
        </button>

      </div>
    </div>

    
    
    
</div>

<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
          <img src="src/levi.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Levi Ribeiro
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Desenvolvedor Front-End</p>
          </div>
        </div>
      </div>

      <!-- More products... -->
    </div>
  </div>
</div>



<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-inter tracking-tight text-gray-900">Fundadores da DixTech</h2>

    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <a href="#" class="group">
      <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
          <img src="src/levi.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              
            </h3>
            <p class="mt-1 text-sm text-gray-500">Desenvolvedor Front-End</p>
          </div>
        </div>
      </a>

      <div class="group">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden lg:h-80 lg:aspect-none">
          <img src="src/levi.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="w-full h-full object-center object-cover">
        </div>
        <h3 class="mt-3 text-lg font-medium text-gray-900">
          Levi Ribeiro
        </h3>
        <p class="mt-1 text-sm text-gray-500">
          Desenvolvedor Front-End
        </p>
      </div>

      <div class="group">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden lg:h-80 lg:aspect-none">
          <img src="src/levi.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="w-full h-full object-center object-cover">
        </div>
        <h3 class="mt-3 text-lg font-medium text-gray-900">
          Levi Ribeiro
        </h3>
        <p class="mt-1 text-sm text-gray-700">
          Desenvolvedor Front-End
        </p>
      </div>

      <div class="group">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden lg:h-80 lg:aspect-none">
          <img src="src/levi.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="w-full h-full object-center object-cover">
        </div>
        <h3 class="mt-3 text-lg font-medium text-gray-900">
          Levi Ribeiro
        </h3>
        <p class="mt-1 text-sm text-gray-700">
          Desenvolvedor Front-End
        </p>
      </div>

      <div class="group">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden lg:h-80 lg:aspect-none">
          <img src="src/levi.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="w-full h-full object-center object-cover">
        </div>
        <h3 class="mt-3 text-lg font-medium text-gray-900">
          Levi Ribeiro
        </h3>
        <p class="mt-1 text-sm text-gray-700">
          Desenvolvedor Front-End
        </p>
      </div>

      <a href="#" class="group">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">
          Focus Paper Refill
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
          $89
        </p>
      </a>

      <a href="#" class="group">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">
          Machined Mechanical Pencil
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
          $35
        </p>
      </a>

      <!-- More products... -->
    </div>
  </div>
</div>


</body>
</html>
