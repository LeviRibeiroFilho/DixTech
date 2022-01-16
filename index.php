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

    <script src="jquery.mask.js"></script>
    <script>

    $(document).ready(function(){
    $("#cel_mens").mask("(00) 00000-0000");

    });

    </script>

    

</head>
<body>

    <?php 

        session_start();
        include "conexao.php";
        

        $consulta = $cn->query("select * from func limit 4");

        include "nav.php";
    ?>
    


<div class="bg-black">

    <div class="jumbotron jumbotron-fluid" style="background-image: url(src/teste.jpg); background-size: cover; height: 75vh; opacity:0.9;">
      <div class="container">
        <h1 class="display-4" style="color: white; font-family: 'Nunito', sans-serif; font-weight: 700;  ">Juntos </br> construimos </br> o seu negócio</h1>
      </div>
    </div>
</div>




  <div class="flex flex-col text-center w-full mt-10">
    <h1 class="pt-10 sm:text-3xl text-2xl font-bold title-font mb-2 text-gray-900"><i class="fas fa-wrench mr-2"></i>SERVIÇOS</h1>
    <p class="lg:w-2/3 mx-auto leading-relaxed text-5x1">Alguns dos membros de nossa equipe DixTech</p>
</div>



<main class="flex items-center p-10 w-full h-full bg-white">
	<div class="border-b pt-14 grid grid-cols-2 gap-8">
		<div class="flex flex-col justify-start">
			<div class="flex flex-col w-full object-cover h-4/6 justify-items-start border rounded-lg overflow-hidden"
				style="min-heigth:320px">
				<img class="w-full h-full object-cover" src='https://th.bing.com/th/id/R.3a720f0b2f7608a1c9334331869a0e0b?rik=G2VD8rxcBQbZKw&riu=http%3a%2f%2fdmgtechs.com%2fwp-content%2fuploads%2f2017%2f10%2fdatacenter11.jpg&ehk=MXS%2bmOqW9Qi5DC8g%2bPV9GQ%2fCmitQIJnK0QvlX%2bFbjSM%3d&risl=&pid=ImgRaw&r=0' alt='Card Image' >
            </div>
			</div>
			<div class="flex flex-col">
				<div class="flex flex-col gap-4">
					<h1 class="capitalize text-4xl font-extrabold"><i class="fas fa-database mr-2"></i>Banco de Dados</h1>
					<p class="text-lg text-gray-500	">A DixTech oferece serviços que garantem a Gestão do Banco de Dados (Oracle, SQL, MySql), integrando ferramentas de mercado que agilizam as rotinas diárias, instalações e configurações
            Nossos sistemas de gestão funcionam em regime 24×7 com equipe capacitada e dimensionada para prestar este serviço de suporte, monitoramento, segurança, backup e restore, atualização de versões, patches e migração. 
					</p>
			</div>
		</div>
	</div>
</main>
<main class="flex items-center p-10 w-full h-full bg-white">
	<div class="border-b pt-10 grid grid-cols-2 gap-8">
		<div class="flex flex-col justify-start">
			<div class="flex flex-col w-full object-cover h-4/6 justify-items-start border rounded-lg overflow-hidden"
				style="min-heigth:320px">
				<img class="w-full h-full object-cover" src='https://www.cadcamperformance.com/wp-content/uploads/2018/03/Learning-Creative-Skills-Through-Online-Courses.png' alt='Card Image' >
            </div>
			</div>
			<div class="flex flex-col">
				<div class="flex flex-col gap-4">
					<h1 class="capitalize text-4xl font-extrabold"><i class="fas fa-paint-brush mr-2"></i>Design</h1>
					<p class="text-lg text-gray-500	">Nossa excelente equipe de designers trabalha com os melhores aplicativos para criações. Toda a equipe é motivada a aplicar sua criatividade e originalidade em todos seus trabalhos.
            Devido à nossa experiência em trabalhos anteriores, atualmente as criações se tornaram mais práticas graças à comunicação que oferecemos, possibilitando mais soluções de design e consequentemente uma aprovação mais satisfatória por parte do cliente.
					</p>
			</div>
		</div>
	</div>
</main>
<main class="flex items-center p-10 w-full h-full bg-white">
	<div class="border-b pt-10 grid grid-cols-2 gap-8">
		<div class="flex flex-col justify-start">
			<div class="flex flex-col w-full object-cover h-4/6 justify-items-start border rounded-lg overflow-hidden"
				style="min-heigth:320px">
				<img class="w-full h-full object-cover" src='https://static.wixstatic.com/media/258dca_6de9489b55be456398f104592f38b524~mv2.jpg/v1/fill/w_594,h_375,al_c,q_80,usm_0.66_1.00_0.01/dev_software.webp' alt='Card Image' >
            </div>
			</div>
			<div class="flex flex-col">
				<div class="flex flex-col gap-4">
					<h1 class="capitalize text-4xl font-extrabold"><i class="fas fa-laptop-code mr-2"></i>Criação de Softwares</h1>
					<p class="text-lg text-gray-500	">A DixTech possui um portfólio completo de soluções para desenvolvimento ágil de softwares conforme as particularidades de cada cliente.
             Nossos profissionais capacitados empregam uma variedade de tecnologias para atender a uma ampla gama de requisitos de empresas de diversos setores e tamanhos, desde startups que desejam lançar sua primeira proposta digital até grandes corporações com sistemas legados complexos.
					</p>
			</div>
		</div>
	</div>
</main>
<main class="flex items-center p-10 w-full h-full bg-white">
	<div class="border-b pt-10 grid grid-cols-2 gap-8">
		<div class="flex flex-col justify-start">
			<div class="flex flex-col w-full object-cover h-4/6 justify-items-start border rounded-lg overflow-hidden"
				style="min-heigth:320px">
				<img class="w-full h-full object-cover" src='https://kngcomunicacao.com.br/wp-content/uploads/2020/09/Perspective-Web-Screens-Mockup00-1980x1244.png' alt='Card Image' >
            </div>
			</div>
			<div class="flex flex-col">
				<div class="flex flex-col gap-4">
					<h1 class="capitalize text-4xl font-extrabold"><i class="fas fa-sitemap mr-2"></i>Criação de Sites</h1>
					<p class="text-lg text-gray-500	"> 
          Acreditamos na individualidade do empresário e de seu negócio, com objetivos únicos e específicos. Pensando nisso, criamos uma metodologia de criação de sites humanizada.
          Por que você quer criar um site? Esse é o ponto de partida, vamos conversar sobre seus objetivo e expectativas, analisar o mercado competitivo, quem são seus clientes e o que eles buscam.
        	</p>
			</div>
		</div>
	</div>
</main>

<div class="flex flex-col text-center w-full">
    <h1 class="sm:text-3xl text-2xl font-bold title-font mb-4 text-gray-900"><i class="fas fa-user-friends mr-2"></i>MEMBROS</h1>
    <p class="lg:w-2/3 mx-auto leading-relaxed text-5x1">Conheça alguns dos membros da DixTech</p>
</div>

<!-- component -->
  <div id="container" class="w-4/5 mx-auto">
    <div class="flex flex-col sm:flex-row">
    <?php while( $exibe = $consulta->fetch(PDO::FETCH_ASSOC)){  ?>
      <div class="sm:w-1/4 p-2">
        <div class="bg-whtie px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img
              class="w-auto mx-auto rounded-full"
              src="src/<?php echo $exibe['foto_func'] ?>"
              alt=""
            />
          </div>
          <h2 class="text-xl font-medium text-gray-700"><?php echo $exibe['nome_func'] ?></h2>
          <span class="text-blue-500 block mb-5"><?php echo $exibe['cargo_func'] ?></span>

          <a href="perfil_client.php?cd=<?php echo $exibe['cd_func'] ?>" class="px-4 py-2 bg-blue-500 text-white rounded-lg"
            >Ver Perfil</a
          >
        </div>
      </div>
      <?php } ?>
      

    </div>
  </div>

 
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

    <div class="leading-loose">
  <form method="post" action="insMens.php" name="insfunc" enctype="multipart/form-data" class="max-w-x m-4 p-10 bg-white rounded shadow-2xl">

    <div class=" mt-2 flex flex-col text-center w-full mb-5">
      <h1 class="pt-5 sm:text-3xl text-2xl font-bold title-font mb-4 text-gray-900"><i class="fas fa-phone-square-alt mr-2"></i>FALE CONOSCO</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-5x1">Contate-nos</p>
    </div>


    <div class="mt-7">
      <label class="text-sm block text-gray-600" for="text">Nome</label>
      <input name="nome_mens" id="nome_mens" type="text" required="" placeholder="Como você gostaria de ser chamado?" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
    </div>

    <div class="mt-2">
      <label class="text-sm block text-gray-600" for="emailAddress">Email</label>
      <input name="email_mens" id="emial_mens" type="text" required="" placeholder="Seu Email principal" class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded">
    </div>

    <div class="mt-2">
      <label class="text-sm block text-gray-600" for="text">Celular</label>
      <input name="cel_mens" id="cel_mens" type="text" required="" placeholder="Seu número de telefone" class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded">
    </div>

    <div class="mt-4">
      <label class="text-sm block text-gray-600" for="text">Mensagem</label>
      <input name="mens_mens" id="mens_mens" type="text" required="" placeholder="Escreva aqui o que você precisa..." class="w-full px-5 py-6 text-gray-700 bg-gray-200 rounded">
    </div>

    <div class="mt-4">
      <button class="px-6 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Enviar</button>
    </div>

  </form>
</div>



<section class=" text-gray-600 body-font">
  <div class="container pt-5 py-24 mx-auto ">
    <div class="flex flex-col text-center w-full mb-5">
      <h1 class="sm:text-3xl text-2xl font-bold title-font mb-4 text-gray-900"><i class="far fa-user mr-2"></i>CONTATO</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-5x1">Você também pode nos contatar por meio de nossas redes sociais</p>
    </div>


    <div class="flex flex-wrap -m-4 text-center" >
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="shadow-lg px-4 py-10 hover:px-5 py-12 rounded-lg"  style="background-image: url('src/insta.jpg'); background-repeat: no-repat;
        background-size: cover;
        background-blend-mode: multiply;">
        <i class="fab fa-instagram fa-3x" style=" color:white;"></i>
          <h2 class="title-font font-medium text-3xl text-white">Instagram</h2>
          <p class="leading-relaxed"><a href="https://www.instagram.com/dix_tech/?hl=pt-br" class="text-white">@dix_tech</p></a>
        </div>
      </div>
    


    
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
        <div class="shadow-lg px-4 py-10 hover:px-5 py-12 rounded-lg shadow-lg"  style="background-image: url('src/face.jpg'); background-repeat: no-repat;
        background-size: cover;
        background-blend-mode: multiply;">
        <i class="fab fa-facebook fa-3x" style=" color:white;"></i>
          <h2 class="title-font font-medium text-3xl text-white">Facebook</h2>
          <p class="leading-relaxed"><a href="https://www.facebook.com/Dix-Tech-Corporation-116487190215728/" class="text-white">@Dix Tech Corporation</p></a>
        </div>
      </div>

      <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
        <div class="shadow-lg px-4 py-10 hover:px-5 py-12 rounded-lg shadow-lg"  style="background-image: linear-gradient(black, rgb(0, 77, 102));; background-repeat: no-repat;
        background-size: cover;
        background-blend-mode: multiply;">
        <i class="fab fa-linkedin fa-3x" style=" color:white;"></i>
          <h2 class="title-font font-medium text-3xl text-white">LinkedIn</h2>
          <p class="leading-relaxed"><a href="https://www.linkedin.com/in/dix-tech-corporation-b83a961b8" class="text-white">@Dix Tech Corporation</p></a>
        </div>
      </div>

      <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
        <div class="shadow-lg px-4 py-10 hover:px-5 py-12 rounded-lg shadow-lg"  style="background-image: url('src/github.svg'); background-repeat: no-repat;
        background-size: cover;
        background-blend-mode: multiply;">
        <i class="fab fa-github fa-3x" style=" color:white;"></i>
          <h2 class="title-font font-medium text-3xl text-white">GitHub</h2>
          <p class="leading-relaxed"><a href="https://github.com/dixdixtech" class="text-white">@dixdixtech</p></a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="border-t flex flex-col text-center w-full pb-5">
    <h1 class="pt-10 sm:text-3xl text-2xl font-bold title-font mb-4 text-gray-900"><i class="fas fa-map-marker-alt mr-2"></i>LOCALIZAÇÃO</h1>
    <p class="lg:w-2/3 mx-auto leading-relaxed text-5x1">Venha nos visitar em nossa instalação física!</p>
</div>

  <section class="text-gray-600 body-font relative">
  <div class="absolute inset-0 bg-gray-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3658.330469423229!2d-46.7306576!3d-23.5206136!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8c1d371ec31%3A0x671c9325c275132e!2sETEC%20Professor%20Basilides%20de%20Godoy.!5e0!3m2!1spt-BR!2sbr!4v1639050922640!5m2!1spt-BR!2sbr" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
  </div>
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
      <h2 class="text-center text-gray-900 text-lg mb-1 font-medium title-font">Local</h2>
      <p class="text-center leading-relaxed mb-5 text-gray-600">Você também pode nos visitar a qualquer momento no seguinte endereço</p>
      <div class="relative mb-4">
      <p class="text-center font-bold ">R. Guaipá, 678 - Vila Leopoldina, São Paulo - SP, 05089-000</p>

      </div>
      <div class="relative mb-4">
      </div>
      
      <a class="mx-auto" href="https://www.google.com.br/maps/place/Edifício+Faria+Lima+Square/@-23.5884517,-46.6830014,17.46z/data=!4m5!3m4!1s0x94ce57437df287e3:0xb2c5a9f4121fac32!8m2!3d-23.588356!4d-46.6823663"><button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Ver Mais  <i class="fas fa-external-link-alt " style=" color:white;"></i></button></a>
    </div>
  </div>
</section>

<?php include 'footer.php' ?>        

</body>
</html>
