<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 12</title>
</head>
<body>
	<h1>
		Formulário
	</h1>
	<form name="cadastro" method="get" action="pagina_form.php">
		Nome:<input type="text" name="nome"> <br><br>
		Senha: <input type="password" name="senha"> <br><br>
		<input type="checkbox" name="termouso" value="termo">
		Aceito o termo de uso <br><br>
		<input type="radio" name="sexo" value="fem">Feminino
		<input type="radio" name="sexo" value="mas">Masculino
		<br><br>
		<input type="hidden" name="login" value="admin">
		&nbsp;&nbsp;&nbsp;
		<input type="button" name="VOLTAR">
		&nbsp;&nbsp;&nbsp;
		<input type="reset" name="LIMPAR">
		&nbsp;&nbsp;&nbsp;
		<input type="submit" name="ENVIAR">
	</form>
</body>
</html>