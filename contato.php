<html>
<head>
	<title> Site </title>
	<link rel="stylesheet" type="text/css" href="css/formato.css">
</head>
<body>
<div id = "geral">
	<div id = "topo">
		<?php
			include "topo.php";
		?>
	</div>
	<div id = "menu">
		<?php include "menu.php"; ?>
	</div>
	<div id = "conteudo">
		<br><br>
		<form action="cad_contrato.php" method="POST">
			<label class="legenda">Nome:</label><br>
			<input type="text" name="nome" class="campos" placeholder="Preencha este campo com seu nome completo" required><br>

			<label class="legenda">Email:</label><br>
			<input type="Email" name="email" class="campos" placeholder="Preencha este campo com seu email" required><br>
			
			<label class="legenda">Assunto:</label><br>
			<input type="text" name="assunto" class="campos" placeholder="Sobre o que você deseja falar?"><br>

			<label class="legenda">Conteudo:</label><br>
			<textarea name="conteudo" class="campos2" placeholder="Digite em no máximo 140 caracteres o conteudo" maxlength="140"></textarea><br>
			<input type="submit" value="Enviar" class="bt_enviar">
		</form>
	</div>
	<div id = "rodape">
		<?php include "rodape.php"; ?>
	</div>
</div>
</body>
</html>