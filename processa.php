<div class="box-footer">
	<a href="index.php">
		<button name="enviar" id="enviar" type="submit" class="btn btn-primary">Voltar</button>
    </a>
</div>
<?php

	include('dbconnection.php');
	
	//$dados = $_FILES['arquivo'];
	//var_dump($dados);
	
	if(!empty($_FILES['arquivo']['tmp_name'])){
		$arquivo = new DomDocument();
		$arquivo->load($_FILES['arquivo']['tmp_name']);
		//var_dump($arquivo);
		
		$linhas = $arquivo->getElementsByTagName("Row");
		//var_dump($linhas);

		//Verifica se o aluno já esta cadastrado
		function verificaAluno($cpf){
				$conn = mysqli_connect("localhost","root", "", "protocolo") or die ("Falha na conexão com o banco de dados");
				$sql = "SELECT id_aluno FROM tb_aluno WHERE id_aluno ='$cpf' ";
       			$con = mysqli_query($conn, $sql);
          		$total=	mysqli_num_rows($con);
          		
          		if($total!= 0 ){//aluno já esta cadastrado
          			return false;
          		}else{//aluno nao cadastrado
          			return true;
          		}
		}
			

		$primeira_linha = true;
		ini_set( 'display_errors', 0 );
		foreach($linhas as $linha){
			if($primeira_linha == false){
				$nome = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
				// echo "Nome: $nome <br>";
				
				$matricula = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
				// echo "E-mail: $matricula <br>";
				
				$curso = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
				// echo "Nivel de Acesso: $curso <br>";

				$cpf = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
				// echo "Nivel de Acesso: $cpf <br>";
				//echo "<hr>";
				
				if (!empty($cpf))
				{
					if(verificaAluno($cpf)){
					//Inserir o usuário no BD
						echo "ALUNO ". $nome." FOI CADASTRADO"."<br>";
					$result_usuario = "INSERT INTO tb_aluno (id_aluno, nome_aluno, matricula, curso) VALUES ('$cpf', '$nome', '$matricula', '$curso')";

					$resultado_usuario = mysqli_query($conn, $result_usuario);

					}else{
						echo "ALUNO ".$nome." CPF ".$cpf." JÁ ERA CADASTRADO"."<br>";
					}
				}
				
			}
			$primeira_linha = false;
		}


		
	}
?>

