<?php
include('dbconnection.php');
?>

	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro do Aluno</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="nome_aluno">Nome Aluno</label>
                  <input required name="nome_aluno" type="text" class="form-control" id="nome_aluno" placeholder="NOME">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="id_aluno">CPF</label>
                  <input required name="id_aluno" type="text" class="form-control" id="id_aluno" placeholder="CPF">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matricula">Matrícula</label>
                  <input required name="matricula" type="text" class="form-control" id="matricula" placeholder="MATRICULA">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="curso">Curso</label>
                  <input required name="curso" type="text" class="form-control" id="curso" placeholder="CURSO">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="enviar" id="enviar" type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>


          <?php  
          		if (isset($_POST['enviar'])) {
          			$nome = $_POST['nome_aluno'];
          			$id_aluno = $_POST['id_aluno'];
                $matricula = $_POST['matricula'];
                $curso = $_POST['curso'];

          			$sql = "INSERT INTO tb_aluno
          			(nome_aluno, id_aluno, matricula, curso) values ('$nome', '$id_aluno', '$matricula', '$curso')";

          			$aux = mysqli_query($conn, $sql);

          			if($aux)	
          			{
	          			echo '<div class="alert alert-success" role="alert">
    	  					      Aluno cadastrado com sucesso!
    						        </div>';
					     } 
					     else
    					{
    						echo '<div class="alert alert-danger" role="alert">
        	  					Aluno não cadastrado!
        						  </div>';
    					}
          		}

          ?>
