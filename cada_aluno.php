<head>
		<meta charset="utf-8">
	<head>
	<body>
		<h1>Cadastro de Alunos por Arquivo XML</h1>
		

		<div>
			<h3>Observações: </h3>
			<p> <b> Os dados devem estar organizados na planilha da seguinte maneira: </b></p>
			<img src="exemplo.png" alt="Exemplo" title="IMG Exemplo" border="10px" align="center"/>

			<p> <b>Com os dados organizados, basta ir em "Arquivo" -> Salvar Como" -> "Planilha XML". </b></p>
			<p> <b>Escolher essa nova planilha e clicar em enviar. </b></p>
		</div>

		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<br><br>
			<label>Selecione o Arquivo XML</label>
			<input type="file" name="arquivo"><br><br>
			<input type="submit" value="Enviar">
		</form>
		

		
	</body>
</html>