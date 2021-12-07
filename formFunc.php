<!DOCTYPE html>
<html lang="pt-br">
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
    <script src="jquery.mask.js"></script>
    <script>

    $(document).ready(function(){
    $("#cpf").mask("000.000.000-00");

    });

    $(document).ready(function(){
    $("#tel").mask("(00) 00000-0000");

    });

    </script>

</head>
<body class="bg-gray-100">
<?php 

    session_start();

    if(empty($_SESSION['ID'])){
      header('location:index.php');
    }

    include "conexao.php";
    
    $consulta = $cn->query('select * from func');
    
   
    include "nav.php";
?>







    <div class="container items-center px-5 py-12 lg:px-20">
  <form method="post" action="insFunc.php" name="insfunc" enctype="multipart/form-data" class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
    <section class="flex flex-col w-full h-full p-1 overflow-auto">
      <label for="name" class="text-base leading-7 text-blueGray-500 mb-5">Input Image</label>
      <header class="flex flex-col items-center justify-center py-12 text-base text-blueGray-500 transition duration-500 ease-in-out transform bg-white border border-dashed rounded-lg focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        <p class="flex flex-wrap justify-center mb-3 text-base leading-7 text-blueGray-500">
          <span>Drag and drop your</span> <span>files anywhere or</span>
        </p>
        <button class="w-auto px-2 py-1 my-2 mr-2 text-blueGray-500 transition duration-500 ease-in-out transform border rounded-md hover:text-blueGray-600 text-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-gray-100"> Upload a file </button>
      </header>
    </section>
    <div class="relative pt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Input Text</label>
      <input type="text" id="name" name="name" placeholder="name" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative pt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Input Text</label>
      <input type="number" id="number" name="number" placeholder="number" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative pt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Input Date</label>
      <input type="date" id="date" name="date" placeholder="name" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative pt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Input Color</label>
      <input type="color" id="color" name="color" placeholder="name" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative pt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Input Range</label>
      <input type="range" id="range" name="range" placeholder="name" class="w-full px-0 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative mt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Component Select</label>
      <select class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        <option>Surabaya</option>
        <option>Bandung</option>
        <option>jakarta</option>
      </select>
    </div>
    <div class="flex flex-wrap mt-4 mb-6 -mx-3">
      <div class="w-full px-3">
        <label class="text-base leading-7 text-blueGray-500" for="description">Text Area </label>
        <textarea class="w-full h-32 px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform bg-white border rounded-lg focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 apearance-none autoexpand" id="description" type="text" name="description" placeholder="Message..." required=""></textarea>
      </div>
    </div>
    <div class="flex">
      <label class="flex items-center">
        <input type="checkbox" class="form-checkbox ">
        <span class="ml-2 text-blueGray-500">checkbox </span>
      </label>
    </div>
    <div class="flex items-center w-full pt-4 mb-4">
      <button class="w-full py-3 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Button </button>
    </div>
    <hr class="my-4 border-gray-200">
    <span class="px-4 py-1 mx-auto -mt-8 text-xs text-black transition duration-500 ease-in-out transform bg-gray-200 rounded-lg">Or continue with </span>
    <div class="inline-flex items-center justify-between w-full pt-8 ">
      <button class="w-auto px-8 py-2 mr-2 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 hover:bg-blueGray-200 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 focus:border-blueGray-700 focus:bg-blueGray-800 ">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"></path>
        </svg>
      </button>
      <button class="w-auto px-8 py-2 mr-2 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 hover:bg-blueGray-200 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 focus:border-blueGray-700 focus:bg-blueGray-800 ">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gitlab" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M21 14l-9 7l-9 -7l3 -11l3 7h6l3 -7z"></path>
        </svg>
      </button>
      <button class="w-auto px-8 py-2 mr-2 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 hover:bg-blueGray-200 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 focus:border-blueGray-700 focus:bg-blueGray-800 ">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z"></path>
        </svg>
      </button>
    </div>
  </form>
</div>






<section class="max-w-4xl p-6 mx-auto mb-10 bg-gray-400 rounded-md shadow-md mt-20">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">Adicionar Funcionário</h1>

    <form method="post" action="insFunc.php" name="insfunc" enctype="multipart/form-data">
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-base leading-7 text-blueGray-500" for="username">Nome</label>
                <input name="txtnome" type="text" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:outline-none focus:border-blueGray-500 focus:bg-white focus:shadow-none focus:ring-2 ring-offset-current ring-offset-2">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="emailAddress">Sobrenome</label>
                <input name="txtsobrenome" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="password">Email</label>
                <input name="txtemail" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="password">Senha</label>
                <input name="txtsenha" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            
            <div>
                <label class="text-white dark:text-gray-200" for="cpf">CPF</label>
                <input name="txtcpf" id="cpf" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="sex">Sexo</label>
                <select name="txtsexo" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option value="Masculino" >Masculino</option>
                    <option value="Feminino" >Feminino</option>
                </select>
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="status">Status</label>
                <select name="txtstatus" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option value="1" >Administrador</option>
                    <option value="0" >Funcionário</option>
                </select>
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="text">Telefone</label>
                <input name="txttel" id="tel" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="text">Cargo</label>
                <input name="txtcargo" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="text">Endereço (Rua, N°, Cidade)</label>
                <input name="txtendereco" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="status">Status de atividade</label>
                <select name="txtatividade" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option value="1" >Ativo</option>
                    <option value="0" >Inativo</option>
                </select>
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">Data</label>
                <input name="txtdata" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            
            <div>
                <label for="txtfoto1">Foto Principal</label>

			    <input type="file" accept="image/*" class="form-control" name="txtfoto1" id="txtfoto1">
			</div>
            <!--<div>
                <label class="block text-sm font-medium text-white">
                Image
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md px-4 font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span class="">Upload a file</span>
                      <input id="file-upload" name="txtfoto" type="file" class="sr-only">
                    </label>
                    
                  </div>
                  <p class="text-xs text-white">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
            </div>-->
        </div>
        <div type="submit" class="flex justify-center mt-6 mb-5">
            <button class="px-40 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-gray-600">Enviar</button>
        </div>
    </form>

    

</section>



 



</body>
