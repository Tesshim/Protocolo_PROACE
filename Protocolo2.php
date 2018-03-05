<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Protocolo Proace</title>
</head>

<body>

<?php
  include 'functions.php';
  
  $i=$_POST["tipo_documento"];
  switch ($i) {
    case "1":
        insere_bd ( $_POST["username"] , $_POST["operador"] , '1º Cadastro PAE' );
        break;
    case "2":
        insere_bd ( $_POST["username"] , $_POST["operador"] , 'Dados Bancários' );
        break;
    case "3":
       insere_bd ( $_POST["username"] , $_POST["operador"] , 'Declaração de Frequência' );
        break;
    case "4":
       insere_bd ( $_POST["username"] , $_POST["operador"] , 'Termo de Concessão e Escolha de Benefício' );
        break;
    case "5":
       insere_bd ( $_POST["username"] , $_POST["operador"] , 'Vinculação em Projeto' );
        break; 
    case "6":
	insere_bd ( $_POST["username"], $_POST["operator"], 'Relatório Final' );
	break;
    case "":
	insere_bd ( $_POST["username"] , $_POST["operador"] , $_POST["document"] );
	break;
		
}

?>

<form method="post" action="protocoloin.php">
  <p>
    <input type="submit" name="tipo_documento2" value="Voltar a página inicial">
  </p>
 
</form>
<table width="510" height="293" border="10" align="center">
    <td width="461" height="72" colspan="2" style="font-size: 16px; text-align: center;"><p><img src="Imagens/Logo proace.jpg" alt="Logo Proace" width="145" height="44">  
      </p>
      <p>PROTOCOLO Nº: 
      <?php
    imprime_elemento ('Id_protocolo');	
	?>
      </p></td>
  </tr>
  <tr>
    <td height="40" colspan="2">Nome:<?php 
    imprime_elemento ('Nome');	
	?></td>
  </tr>
  <tr>
    <td colspan="2">Data:<?php
    echo date('d/m/Y');	
	?></td>
  </tr>
  <tr>
  <td colspan="2">Operador:<?php
    imprime_elemento ('Operador');	
	?></td>
  </tr>
  <tr>
  <td colspan="2"></td>
  </tr>
  <tr>
    <td height="74" colspan="2">Documento:<?php
    imprime_elemento ('Documento');	
	?></td>
</table>
<p>&nbsp;</p>
<table width="510" height="293" border="10" align="center">
    <td width="461" height="72" colspan="2" style="font-size: 16px; text-align: center;"><p><img src="Imagens/Logo proace.png" alt="Logo Proace" width="145" height="44">  
      </p>
      <p>PROTOCOLO Nº: 
      <?php
    imprime_elemento ('Id_protocolo');	
	?>
      </p></td>
  </tr>
  <tr>
    <td height="40" colspan="2">Nome:<?php 
    imprime_elemento ('Nome');	
	?></td>
  </tr>
  <tr>
    <td colspan="2">Data:<?php
    echo date('d/m/Y');	
	?></td>
  </tr>
  <tr>
  <td colspan="2">Operador:<?php
    imprime_elemento ('Operador');	
	?></td>
  </tr>
  <tr>
  <td colspan="2"></td>
  </tr>
  <tr>
    <td height="74" colspan="2">Documento:<?php
    imprime_elemento ('Documento');	
	?></td>
</table>
<p>&nbsp;</p>
<?php
   mysql_close ();
?>
</body>
</html>