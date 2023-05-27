<?php
require "dadostransporte.php"; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Transporte</title>
	<link rel="stylesheet" type="text/css" href="estilotransporte.css">
</head>
<body>


  	<!--header-->


      <header class="o-header">
				<div class="center">
				<div class="logo"><img src="../imagens/logo.png"/></div> <!--Logo-->
				<div class="menu">
          <a href="index.php">Home</a>
					<a href="reserva.php"> reserva</a>
					<a href="pacotes.php">Pacotes</a>
          <a href="../transporte/transporte.php"> Transporte</a>
				</div>   <!--menu-->
				</div>   <!--center-->
</div>
				
			</header>


			<!--main-->


			<main class="main">
		  <div class="container">
		
            <?php
            foreach($carros as $i =>  $car){
    ?>	
		<div class="card">
            <a href="transporte-detalhe.php?i=<?=$i?>">
            <img src="<?=$car["foto"]?>" alt="<?=$car["marca"]?>" alt="<?=$car["modelo"]?>">
            </a>
			<h3><a href="transporte-detalhe.php?i=<?=$i?>">
                <?=$car["modelo"]?>
            </a>
        </h3>

			
		</div>
	
    <?php
    }
    ?>


    <?php
            foreach($aviao as $i => $fly){
    ?>	
		<div class="card">
            <a href="transporte-detalhe.php?i=<?=$i?>">
            <img src="<?=$fly["foto"]?>"  alt="<?=$fly["companhia"]?>" alt="<?=$fly["classes"]?>">
            </a>
			<h3><a href="transporte-detalhe.php?i=<?=$i?>">
                <?=$fly["companhia"]?>
            </a>
        </h3>

			
		</div>
	
    <?php
    }
    ?>
    
    </div>
    
		</main>


    <!--footer-->


	<footer class="footer">
  <div class="footer__addr">
    <h1 class="footer__logo">GitPalaceHotel</h1>
        
    <h2>Contatos</h2>
    
    <address>
      4002-8922<br>
          
      <a class="footer__btn" href="https://mail.google.com/mail/u/0/#inbox">Email- GitPalaceHotel_04.@gmail.com
</a>
    </address>
  </div>
  
  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title">  Media</h2>

      <ul class="nav__ul">
        <li>
          <a href="#">Em todas as redes sociais</a>
        </li>
        <li>
          <a href="#">@GitPalaceHotel_04</a>
        
        </li>
      </ul>
    </li>
    
    <li class="nav__item nav__item--extra">
      <h2 class="nav__title">Website Designer by</h2>
      
      <ul class="nav__ul nav__ul--extra">
        <li>
          <a href="#"> Ingrid Queiroz <br> Thaina Azevedo <br> Rayane Marinho</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item">
      <h2 class="nav__title">Legal</h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Politica de Privacidade</a>
        </li>
        
        <li>
          <a href="#">Termos de uso</a>
        </li>
        
      </ul>
    </li>
  </ul>
  
</footer>
	</body>
</html>
</body>
</html>

