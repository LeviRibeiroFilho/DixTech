<?php

if(!empty($_SESSION['ID'])){
  $consulta_Usuario = $cn->query("select * from func where cd_func = '$_SESSION[ID]'");
  $exibe_usuario = $consulta_Usuario->fetch(PDO::FETCH_ASSOC);
}  
  
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <a href="index.php"><div class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-7 w-auto" src="src/dixtech.png" alt="Workflow">
          <img class="hidden lg:block h-7 w-auto" src="src/dixtech.png" alt="Workflow">
        </div></a>
      </div>

      <div class="absolute inset-y-0 right-0 flex items-center pr-0 sm:static sm:inset-auto sm:ml-6 sm:pr-0">


            <a href="sobre_nos.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sobre Nós</a>

            
            
            <?php if(empty($_SESSION['ID'])) {?>
            <a class="mx-3" href="login.php"><i style='font-size:24px; color:white;' class='fas'>&#xf406;</i></a>
            <?php } else{ ?>

            <div class="relative mx-3">

              <div class="dropdown dropleft">
                <button class="btn btn-secondary bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i style='font-size:20px; color:green;' class='fas'>&#xf406;</i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="perfil.php?cd=<?php echo $exibe_usuario['cd_func'];?>"><?php echo mb_strimwidth($exibe_usuario['nome_func'],0 ,13 ,'...'); ?><i style='font-size:20px; color:black; position: absolute; right: 8%; margin-top: 1%;' class='fas'>&#xf406;</i></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="sair.php"> Sair</a>
                  <a class="dropdown-item" href="func.php">Funcionários</a>
                </div>
              </div>
              
            </div>

            <?php } ?>
           
        </div>
      </div>
    </div>
  </div>
</nav>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
    </div>
  </div>
</nav>

<!--

<div class="dropdown">
                <button class="btn btn-secondary bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i style='font-size:24px; color:green;' class='fas'>&#xf406;</i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </div>    
 -->

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <div class="relative mx-3">
      <div class="dropdown dropleft">
        <button class="btn dropleft btn-secondary bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i style='font-size:20px; color:green;' class='fas'>&#xf406;</i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="perfil.php?cd=<?php echo $exibe_usuario['cd_func'];?>"><?php echo mb_strimwidth($exibe_usuario['nome_func'],0 ,13 ,'...'); ?><i style='font-size:20px; color:black; position: absolute; right: 8%; margin-top: 1%;' class='fas'>&#xf406;</i></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="sair.php"> Sair</a>
          <a class="dropdown-item" href="func.php">Funcionários</a>
        </div>
      </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-0 sm:static sm:inset-auto sm:ml-6 sm:pr-0">


            <a href="sobre_nos.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sobre Nós</a>

            
            
           
        </div>
  </div>
</nav>

 