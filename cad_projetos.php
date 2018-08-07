<?php
include('dbconnection.php');
?>

	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro de Projetos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="titulo">Título</label>
                  <input required name="titulo" type="text" class="form-control" id="titulo" placeholder="TÍTULO">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="coordenador">Coordenador</label>
                  <input required name="coordenador" type="text" class="form-control" id="coordenador" placeholder="CORDENADOR">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="unidade">Unidade de Registro</label>
                  <input required name="unidade" type="text" class="form-control" id="unidade" placeholder="UNIDADE">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                <label for="iniv">Início da Vigência:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="iniv" id="iniv" type="date" class="form-control pull-right">
                </div>
              </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                <label for="termv">Termino da Vigência:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="termv" id="termv" type="date" class="form-control pull-right">
                </div>
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
          			$titulo = $_POST['titulo'];
          			$coordenador = $_POST['coordenador'];
                $unidade = $_POST['unidade'];
                $iniv = $_POST['iniv'];
                $termv = $_POST['termv'];

          			$sql = "INSERT INTO tb_projeto
          			(titulo, coordenador, locacao, vigencia_inicio, vigencia_termino) values ('$titulo', '$coordenador', '$unidade', '$iniv', '$termv')";

          			mysqli_query($conn, $sql);

          			if($conn != 0)	
          			{
	          			echo '<div class="alert alert-success" role="alert">
	  					Projeto cadastrado com sucesso!
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
