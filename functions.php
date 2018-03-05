<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link href="/style/style.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
include 'conexao.php';

function insere_bd ($name,$operador,$document)
{
	//codigo em sql para iserir os dados resgatados do form
	$strSQL = "INSERT INTO protocolo2(Nome,Operador,Documento) VALUES ('$name' ,  '$operador' , '$document')"; 
	//function que faz a cahamada a consulta sql
	mysql_query($strSQL) or die(mysql_error());
	
		
	}

function imprime_arrow ()
{
	
	
	$strSQL = "SELECT * FROM protocolo2";

	// Executa a query (o recordset $rs contém o resultado da query)
	$rs = mysql_query($strSQL);
	
	// Loop pelo recordset $rs
	// Cada linha vai para um array ($row) usando mysql_fetch_array
	while($row = mysql_fetch_array($rs)) {

	   // Escreve o valor da coluna FirstName (que está no array $row)
	  echo $row['Nome'] . "<br />";

	  }
	  
	  	
	}
	
function imprime_elemento ($elemento)   
{		
	
	  $strSQL = mysql_fetch_array(mysql_query("SELECT * FROM `protocolo2` ORDER BY `Id_protocolo` DESC LIMIT 1"));
	  echo $strSQL[$elemento] . '</br>'; 
		
	/*$strSQL = "SELECT * FROM 'protocolo2' ORDER BY 'Id_protocolo' DESC LIMIT 0,1";
	$rs = mysql_query($strSQL);	
	///mysql_fetch_array grava a linha do BD, no primeiro parâmetro da matriz escolhem-se as colunas no segundo o caracter
	$row = mysql_fetch_array($rs);
		echo $row ['Nome'];*/	  	 
	}


/*function para inserir no BD
insere_bd ( $_POST["username"] , $_POST["telephone"] , $_POST["document"] );*/
?>
</body>
</html>

