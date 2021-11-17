<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/general.css">
    <title>🏠 - tcm</title>

    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>

    <?php 
        include "conexao.php";

        $consulta = $cn->query('select news_email, news_email_id from news_letter');
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC)
    ?>
    
 <nav>
     <div class="logo">
         <a href="index.html">
         <img src="src/dixtech.png" alt="dixtech_logo" width="120px">
         </a>
     </div>
     <ul class="nav_links">
         <li>
             <a href="#">Home</a>
         </li>
         <li>
             <a href="#">Quem somos</a>
         </li>
         <li>
             <a href="#">Nossa Missão</a>
         </li>
     </ul>
 </nav>

<div class="landing_section">

    <img src="src/background.jpg" alt="dixtech_logo" class="background_image" width="100%" height="640px">
    <h1>Juntos construimos seus sonhos</h1>
    <h3><?php echo $exibe['news_email']?></h3>
    <button>Contate-nos</button>
    
</div>


</body>
</html>