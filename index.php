<?php
    
    require "dadoshotel.php";
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>GitPalaceHotel </title>
	<link href="estilo.css" rel="stylesheet">

	<div class="container">
		
        <?php
            foreach($dadoshotel as $h => $dds){
        ?>
        
		<div class="card">
            <a href="recebe.php?i=<?= $h?>"> 
			    <img src="<?= $h["Fotos"]?>">
            </a>
			<h3><a href="recebe.php?i=<?= $h?>"> 
                <?= $dds["Nome"]?>
            </a></h3>
			
		</div>
			
        <?php } ?>
		
	</div>

    
   
</body>
</html>