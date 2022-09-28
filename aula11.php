<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 11</title>
	<style>
		.FlexP{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-flow: wrap row;
			flex-grow: 1;
		}
		.FlexP div {
			height: 100px;
			width: 150px;
			background-color: darkred;
			padding: 15px;
			margin: 5px;
			text-align: center;
		}
	</style>
</head>
<body>
<p>
	Declarando a variável sem array
</p>
<?php 
	$nome1 = "Vitor";
	$nome2 = "José";
	$nome3 = "Astrogildo";
	$nome4 = "Gilberto";
	$nome5 = "Alexandre";

	echo "$nome1<br>$nome2<br>$nome3<br>$nome4<br>$nome5";
 ?>
 <p>
 	Declarando a variável com array
 </p>
<?php 
	$nomes = array("Vitor","José","Astrogildo","Gilberto","Alexandre");

	echo "Nomes no array:";
	foreach ($nomes as $n) {
		echo "<br>".$n;
	}
 ?>
<!--
	Teste com o Display Flex
-->
 <div class="FlexP">
 	<div>
 		<h1>TESTE</h1>
 	</div>
 	<div>
 		<h1>TESTE</h1>
 	</div>
 	<div>
 		<h1>*TESTE*</h1>
 	</div>
 	<div>
 		<h1>*TESTE*</h1>
 	</div>
 </div>
<p>
	Array associativo
</p>
 <?php 
 	$salarios = array("João" => 2000, "Vitor" => 10000, "Raquell" => 600);

 	echo "Salario do João é ".$salarios["João"]."<br>";
 	echo "Salario do Vitor é ".$salarios["Vitor"]."<br>";
 	echo "Salario da Raquell é ".$salarios["Raquell"]."<br>";
  ?>
  <p>
  	Troca de valores
  </p>
  <?php 
  	$salarios["João"] = "Alto";
  	$salarios["Vitor"] = "Gigante";
  	$salarios["Raquell"] = "Baixinho";

  	echo "Salario do João é ".$salarios["João"]."<br>";
 	echo "Salario do Vitor é ".$salarios["Vitor"]."<br>";
 	echo "Salario da Raquell é ".$salarios["Raquell"]."<br>";
   ?>
</body>
</html>