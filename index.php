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

<div class="px-14">
<h3 class="bg-gray-300 text-center py-2 font-sans mx-auto rounded-lg"><i class="fas fa-briefcase"></i> Serviços</h3>
</div>



<main class="flex items-center p-10 w-full h-full bg-white">
	<div class="border-b pt-16 grid grid-cols-2 gap-8">
		<div class="flex flex-col justify-start">
			<div class="flex flex-col w-full object-cover h-4/6 justify-items-start border rounded-lg overflow-hidden"
				style="min-heigth:320px">
				<img class="w-full h-full object-cover" src='https://th.bing.com/th/id/R.3a720f0b2f7608a1c9334331869a0e0b?rik=G2VD8rxcBQbZKw&riu=http%3a%2f%2fdmgtechs.com%2fwp-content%2fuploads%2f2017%2f10%2fdatacenter11.jpg&ehk=MXS%2bmOqW9Qi5DC8g%2bPV9GQ%2fCmitQIJnK0QvlX%2bFbjSM%3d&risl=&pid=ImgRaw&r=0' alt='Card Image' >
            </div>
			</div>
			<div class="flex flex-col">
				<div class="flex flex-col gap-4">
					<h1 class="capitalize text-4xl font-extrabold">Banco de Dados</h1>
					<p class="text-lg text-gray-500	">A DixTech oferece serviços que garantem a Gestão do Banco de Dados (Oracle, SQL, MySql), integrando ferramentas de mercado que agilizam as rotinas diárias, instalações e configurações
            Nossos sistemas de gestão funcionam em regime 24×7 com equipe capacitada e dimensionada para prestar este serviço de suporte, monitoramento, segurança, backup e restore, atualização de versões, patches e migração. 
					</p>
			</div>
		</div>
	</div>
</main>
<main class="flex items-center p-10 w-full h-full bg-white">
	<div class="border-b pt-16 grid grid-cols-2 gap-8">
		<div class="flex flex-col justify-start">
			<div class="flex flex-col w-full object-cover h-4/6 justify-items-start border rounded-lg overflow-hidden"
				style="min-heigth:320px">
				<img class="w-full h-full object-cover" src='https://www.cadcamperformance.com/wp-content/uploads/2018/03/Learning-Creative-Skills-Through-Online-Courses.png' alt='Card Image' >
            </div>
			</div>
			<div class="flex flex-col">
				<div class="flex flex-col gap-4">
					<h1 class="capitalize text-4xl font-extrabold">Design</h1>
					<p class="text-lg text-gray-500	">Nossa excelente equipe de designers trabalha com os melhores aplicativos para criações. Toda a equipe é motivada a aplicar sua criatividade e originalidade em todos seus trabalhos.
            Devido à nossa experiência em trabalhos anteriores, atualmente as criações se tornaram mais práticas graças à comunicação que oferecemos, possibilitando mais soluções de design e consequentemente uma aprovação mais satisfatória por parte do cliente.
					</p>
			</div>
		</div>
	</div>
</main>
<main class="flex items-center p-10 w-full h-full bg-white">
	<div class="border-b pt-16 grid grid-cols-2 gap-8">
		<div class="flex flex-col justify-start">
			<div class="flex flex-col w-full object-cover h-4/6 justify-items-start border rounded-lg overflow-hidden"
				style="min-heigth:320px">
				<img class="w-full h-full object-cover" src='https://static.wixstatic.com/media/258dca_6de9489b55be456398f104592f38b524~mv2.jpg/v1/fill/w_594,h_375,al_c,q_80,usm_0.66_1.00_0.01/dev_software.webp' alt='Card Image' >
            </div>
			</div>
			<div class="flex flex-col">
				<div class="flex flex-col gap-4">
					<h1 class="capitalize text-4xl font-extrabold">Criação de Softwares</h1>
					<p class="text-lg text-gray-500	">A DixTech possui um portfólio completo de soluções para desenvolvimento ágil de softwares conforme as particularidades de cada cliente.
             Nossos profissionais capacitados empregam uma variedade de tecnologias para atender a uma ampla gama de requisitos de empresas de diversos setores e tamanhos, desde startups que desejam lançar sua primeira proposta digital até grandes corporações com sistemas legados complexos.
					</p>
			</div>
		</div>
	</div>
</main>
<main class="flex items-center p-10 w-full h-full bg-white">
	<div class="border-b pt-16 grid grid-cols-2 gap-8">
		<div class="flex flex-col justify-start">
			<div class="flex flex-col w-full object-cover h-4/6 justify-items-start border rounded-lg overflow-hidden"
				style="min-heigth:320px">
				<img class="w-full h-full object-cover" src='https://kngcomunicacao.com.br/wp-content/uploads/2020/09/Perspective-Web-Screens-Mockup00-1980x1244.png' alt='Card Image' >
            </div>
			</div>
			<div class="flex flex-col">
				<div class="flex flex-col gap-4">
					<h1 class="capitalize text-4xl font-extrabold">Criação de Sites</h1>
					<p class="text-lg text-gray-500	"> 
          Acreditamos na individualidade do empresário e de seu negócio, com objetivos únicos e específicos. Pensando nisso, criamos uma metodologia de criação de sites humanizada.
          Por que você quer criar um site? Esse é o ponto de partida, vamos conversar sobre seus objetivo e expectativas, analisar o mercado competitivo, quem são seus clientes e o que eles buscam.
        	</p>
			</div>
		</div>
	</div>
</main>


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
          <p class="leading-relaxed"><a href="https://www.facebook.com/Dix-Tech-Corporation-116487190215728/" class="text-white">@dix_tech</p></a>
        </div>
      </div>

      <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
        <div class="shadow-lg px-4 py-10 hover:px-5 py-12 rounded-lg shadow-lg"  style="background-image: linear-gradient(black, rgb(0, 77, 102));; background-repeat: no-repat;
        background-size: cover;
        background-blend-mode: multiply;">
        <i class="fab fa-linkedin fa-3x" style=" color:white;"></i>
          <h2 class="title-font font-medium text-3xl text-white">LinkedIn</h2>
          <p class="leading-relaxed"><a href="https://www.linkedin.com/in/dix-tech-corporation-b83a961b8" class="text-white">@dix_tech</p></a>
        </div>
      </div>

      <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
        <div class="shadow-lg px-4 py-10 hover:px-5 py-12 rounded-lg shadow-lg"  style="background-image: url('src/github.svg'); background-repeat: no-repat;
        background-size: cover;
        background-blend-mode: multiply;">
        <i class="fab fa-github fa-3x" style=" color:white;"></i>
          <h2 class="title-font font-medium text-3xl text-white">GitHub</h2>
          <p class="leading-relaxed"><a href="https://github.com/dixdixtech" class="text-white">@dix_tech</p></a>
        </div>
      </div>
    </div>
  </div>
</section>

  <div class="border-t flex flex-col text-center w-full mb-2">
    <h1 class="mt-5 sm:text-3xl text-2xl font-bold title-font mb-4 text-gray-900"><i class="fas fa-map-marker-alt"></i> Localização </h1>
  </div>

  <section class="text-gray-600 body-font relative">
  <div class="absolute inset-0 bg-gray-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.2561942393154!2d-46.683001356507745!3d-23.588451747772023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57437df287e3%3A0xb2c5a9f4121fac32!2sEdif%C3%ADcio%20Faria%20Lima%20Square!5e0!3m2!1spt-BR!2sbr!4v1638977752815!5m2!1spt-BR!2sbr" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
  </div>
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
      <h2 class="text-center text-gray-900 text-lg mb-1 font-medium title-font">Local</h2>
      <p class="text-center leading-relaxed mb-5 text-gray-600">Você também pode nos visitar a qualquer momento no seguinte endereço</p>
      <div class="relative mb-4">
      <p class="text-center font-bold ">Av. Brg. Faria Lima, 3600 - Itaim Bibi, São Paulo - SP, 04538-132</p>

      </div>
      <div class="relative mb-4">
      </div>
      
      <a class="mx-auto" href="https://www.google.com.br/maps/place/Edifício+Faria+Lima+Square/@-23.5884517,-46.6830014,17.46z/data=!4m5!3m4!1s0x94ce57437df287e3:0xb2c5a9f4121fac32!8m2!3d-23.588356!4d-46.6823663"><button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Ver Mais  <i class="fas fa-external-link-alt " style=" color:white;"></i></button></a>
    </div>
  </div>
</section>


          <!-- This example requires Tailwind CSS v2.0+
        -->
        <footer class="mt-10 bg-gray-100" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="px-5 py-12 mx-auto max-w-7xl lg:py-16 md:px-12 lg:px-20">
              <div class="md:grid md:grid-cols-5 md:gap-8">
                <div>
                  <h3 class="text-xs font-semibold tracking-wider text-blue-600 uppercase"> Solutions </h3>
                  <ul role="list" class="mt-4 space-y-4">
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Marketing </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Analytics </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Commerce </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Insights </a>
                    </li>
                  </ul>
                </div>
                <div class="mt-12 md:mt-0">
                  <h3 class="text-xs font-semibold tracking-wider text-blue-600 uppercase"> Support </h3>
                  <ul role="list" class="mt-4 space-y-4">
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Pricing </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Documentation </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Guides </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> API Status </a>
                    </li>
                  </ul>
                </div>
                <div class="mt-12 md:mt-0">
                  <h3 class="text-xs font-semibold tracking-wider text-blue-600 uppercase"> Support </h3>
                  <ul role="list" class="mt-4 space-y-4">
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Pricing </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Documentation </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Guides </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> API Status </a>
                    </li>
                  </ul>
                </div>
                <div class="mt-12 md:mt-0">
                  <h3 class="text-xs font-semibold tracking-wider text-blue-600 uppercase"> Support </h3>
                  <ul role="list" class="mt-4 space-y-4">
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Pricing </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Documentation </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Guides </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> API Status </a>
                    </li>
                  </ul>
                </div>
                <div class="mt-12 md:mt-0">
                  <h3 class="text-xs font-semibold tracking-wider text-blue-600 uppercase"> Support </h3>
                  <ul role="list" class="mt-4 space-y-4">
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Pricing </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Documentation </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Guides </a>
                    </li>
                    <li>
                      <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900"> API Status </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="
            bg-gray-100
          px-5
          py-12
          mx-auto
          bg-gray-50
          max-w-7xl
          sm:px-6
          md:flex md:items-center md:justify-between
          lg:px-20
        ">
              <div class="flex justify-center mb-8 space-x-6 md:order-last md:mb-0">
                <a href="https://www.facebook.com/Dix-Tech-Corporation-116487190215728/" class="text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Facebook</span>
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                  </svg>
                </a>
                <a href="https://www.instagram.com/dix_tech/?hl=pt-br" class="text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Instagram</span>
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                  </svg>
                </a>
                <a href="https://www.linkedin.com/in/dix-tech-corporation-b83a961b8" class="text-gray-400 hover:text-gray-500">
                <svg
                  class="w-6 h-6 text-gray-400 hover:text-gray-500 fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512">
                  <path
                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                  ></path>
                </svg>
                </a>
                
                <a href="https://github.com/dixdixtech" class="text-gray-400 hover:text-gray-500">
                  <span class="sr-only">GitHub</span>
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                  </svg>
                </a>
                
              </div>
              <div class="mt-8 md:mt-0 md:order-1">
                <span class="mt-2 text-sm font-light text-gray-500"> Copyright © 2020 - 2021 <a href="index.php" class="mx-2 text-wickedblue hover:text-gray-500" rel="noopener noreferrer">@dixtech</a>. Since 2020 </span>
              </div>
            </div>
          </footer>
        

</body>
</html>
