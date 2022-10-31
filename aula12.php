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
		Nome:<input type="text" name="nome" maxlength="20" size="20"> <br><br>
		Senha: <input type="password" name="senha" maxlength="20" size="20"> <br><br>
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
		&nbsp;&nbsp;&nbsp;
		<a href="#" onclick="document.cadastro.reset()">
			LIMPAR
		</a>
		<br><br>
		<button onclick="windowy.location.href=´https://www.youtube.com/´">
			Youtube
		</button>
		<input type="submit" name="youtube" onclick="windowy.location.href=´https://www.youtube.com/´">
		<br><br>
		<button onclick="windowy.location.reload()">
			Atualizar página
		</button>
		&nbsp;&nbsp;&nbsp;
		<button onclick="windowy.print()">
			Imprimir
		</button>
		&nbsp;&nbsp;&nbsp;
		<button onclick="windowy.history.back()">
			Voltar
		</button>
		<br><br>
		Animal:
		<select name="animais">
			<option value="elef">
				Elefante
			</option>
			<option value="hpp">
				Hipopótamo
			</option>
			<option value="rino">
				Rinoceronte
			</option>
			<option value="dino" selected="true">
				Dinossauro
			</option>
		</select>
		<br><br>
		Mensagem <br>
		<textarea name="mens" cols="40" rows="15"></textarea>
	</form>
</body>
</html>

<?php 
//imagem blob, varbinary, image, text - sem tamanho
 ?>