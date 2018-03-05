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
  <p>Operador: 
    <input type="text" size="33" maxlength="10" name="operador">
  </p>
  <p><span style="font-size: 28">Documento</span>:
<textarea name="document" rows="6" cols="30"></textarea> 
  </p>
  <p>
    <input type="submit">    
  </p>
</form>

</body>



</html>