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
    <header>
    <div class="center">
				<div class="logo"><img src="../imagens/logo.png"/></div> <!--Logo-->
				<div class="menu">
                    <a href="../../base_do_projeto/index.php">Home</a>
					<a href="../../base_do_projeto/php/reserva.php"> reserva</a>
					<a href="../pacotes/pacotes.php">Pacotes</a>
                    <a href="../transporte/transporte.php"> Transporte</a>
				</div>   <!--menu-->
				</div>   <!--center-->
</div>
    </header>
    
	<main class = "main">
	<div class="container-detalhe">
		<div class="card">
		<?php
			if(isset($car)){

		 ?>
         <img src="<?= $car["foto"] ?>" alt="<?= $car["marca"] ?>">
		 <h3><?= $car["marca"] ?></h3>
		 <h4><?= $car["modelo"] ?></h4>
 		 <p>valor: <?=number_format( $car["custo"],2) ?></p>
		 <a href="transporte.php" class="link">Voltar</a>

		<?php
		}else{
			echo "<h3> opção não encontrado!</h3>";
		}
 		?>
		<h3>passagem aeria</h3>
<?php
			if(isset($fly)){

		 ?>
         <img src="<?= $fly["foto"] ?>" alt="<?= $fly["companhia"] ?>">
		 <h3><?= $fly["companhia"] ?></h3>
 		 <p>valor: <?=number_format( $fly["custo"],2) ?></p>
 		 <p><?= $fly["classes"] ?></p>
		 <a href="transporte.php" class="link">Voltar</a>

		<?php
		}else{
			echo "<h3> opção não encontrado!</h3>";
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

