<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>🏠 - tcm</title>

    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>

    <?php 
        include "conexao.php";
        include "nav.html";

        $consulta = $cn->query('select news_email, news_email_id from news_letter');
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC)


    ?>
    


<div class="landing_section">

    <div class="jumbotron jumbotron-fluid" style="background-image: url(src/teste.jpg); background-size: cover; height: 75vh;">
      <div class="container">
        <h1 class="display-4" style="color: white; font-family: 'Nunito', sans-serif; font-weight: 700;  ">Juntos </br> construimos </br> seus sonhos</h1>
        <p class="lead" style="color: white; font-family: 'Nunito', sans-serif;">Este é um jumbotron modificado que ocupa todo o espaço horizontal de seu elemento pai.</p>
        <button>Contate-nos</button>
      </div>
    </div>

    
    
    
</div>


</body>
</html>
