<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h2>Formulário - Recebendo dados - Elementos option</h2>
<form name="cadastro" method="post" action ="pagina_elementos.php">

	Estados :
	<select name="estados">
	<option value="SP">São Paulo</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="MG">Minas Gerais</option>
	</select><br><br>

	Nome <input type="text" name="nome">
	<input type="submit" value="ENVIAR" >


</form>
</body>
</html>