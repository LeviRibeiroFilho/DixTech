<?php

if(!empty($_SESSION['ID'])){
  $consulta_Usuario = $cn->query("select * from func where cd_func = '$_SESSION[ID]'");
  $exibe_usuario = $consulta_Usuario->fetch(PDO::FETCH_ASSOC);
}  
  
?>



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
 <nav class="py-3 navbar navbar-expand-lg navbar-dark bg-black ">
 <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <a href="index.php"><div class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-7 w-auto" src="src/dixtech.png" alt="Workflow">
          <img class="hidden lg:block h-7 w-auto" src="src/dixtech.png" alt="Workflow">
        </div></a>
      </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

     

  <div class="collapse navbar-collapse" style="max-width: 200px; " id="navbarSupportedContent">
    <ul class=" nav navbar-nav navbar-right">
      
      
      
    
    <form class="form-inline my-2 my-lg-0">
    <div class="btn-group">
      <div class="btn-group dropleft" role="group">

            
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
          <a href="sobre_nos.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sobre Nós</a>

        </div>
    </form>
    </ul>
  </div>
</nav>