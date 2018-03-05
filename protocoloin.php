	<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Protocolo Proace</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
<pre style="text-align: right"> 

<?php 
	
	echo "<p>Hoje é " . date("l") . "</p>";

	?>
     </pre>   
<span style="font-size: 30px; text-align: center;">Programa de Protocolos Proace </span>


<form method="post" action="Protocolo2.php">
<p>Nome:      
  <input type="text" size="35" maxlength="256" name="username">
  </p>
  <p>  Operador:
  <input type="text" size="33" maxlength="256" name="operador">
  </p>
  <p><span style="font-size: 20px; font-style: normal;">Tipo de Documento: </span>   </p>
  <p><!--<input type="radio" name="tipo_documento" value="1">
    1º Cadastro PAE-->
      <input type="radio" name="tipo_documento" value="2">  
  Dados Bancários
  
  <input type="radio" name="tipo_documento" value="3">
 Declaração de Frequência

  <input type="radio" name="tipo_documento" value="4">
  Termo de Concessão e Escolha de Benefício

  <input type="radio" name="tipo_documento" value="5">
  Vinculação em Projeto

  <p>    
    <input type="submit">    
</p>
</form>
<form method="post" action="Protocolo1.php"><input type="submit" name="tipo_documento2" value=" Clique aqui para outro tipo de documentação"></form>
</body>



</html>