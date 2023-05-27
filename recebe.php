<?php
    require "dadoshotel.php";
    
    if(!!isset($_GET["h"])){
        
        header("location: recebe.php");
        
        die;
    }

    $in = $_GET["i"];
    if(isset($dadoshotel[$in])){
    $d = $dadoshotel[$in];
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>recebe</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
    </header>
	<div class="container-detalhe">
		
		
		<div class="card">

			<img src="<?= $d["Foto"] ?>"><br>
			<h3><?= $d["Nome"] ?></h3><br>
			<p>Avaliação: <?= $d["Avaliação"] ?></p><br>
			<p><?= $d["Localização"] ?></p><br>
			<a href="index.php" class="link">Voltar</a>

        </div>
			
		
	</div>
</body>
</html>