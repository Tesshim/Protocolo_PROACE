<?php
    include('dbconnection.php');
    $id_aluno = $_GET['id_aluno'];

    $sql = "SELECT * FROM tb_aluno WHERE id_aluno = $id_aluno";
    $q_aluno = mysqli_query($conn, $sql);
    $aluno = mysqli_fetch_array($q_aluno, MYSQLI_BOTH);

?>

	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar do Aluno</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="nome_aluno">Nome Aluno</label>
                  <input name="nome_aluno" type="text" class="form-control" id="nome_aluno" value="<?php echo $aluno['nome_aluno']; ?>" ">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="id_aluno">CPF</label>
                  <input required name="id_aluno" type="text" class="form-control" id="id_aluno" value="<?php echo $aluno['id_aluno']; ?>">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matricula">Matricula</label>
                  <input required name="matricula"type="text" class="form-control" id="matricula" value="<?php echo $aluno['matricula']; ?>">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="curso">Curso</label>
                  <input required name="curso" type="text" class="form-control" id="curso" value="<?php echo $aluno['curso']; ?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="salvar" type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>


          <?php  
              if (isset($_POST['salvar'])) {
                $nome = $_POST['nome_aluno'];
                $id_aluno = $_POST['id_aluno'];
                $matricula = $_POST['matricula'];
                $curso = $_POST['curso'];

                $sql_editar = "UPDATE tb_aluno SET nome_aluno = '$nome', id_aluno = '$id_aluno', matricula = '$matricula', curso = '$curso' WHERE id_aluno = '$id_aluno'";

                mysqli_query($conn, $sql_editar);

                if($conn != 0)  
                {
                  echo '<div class="alert alert-success" role="alert">
              Cadastro alterado com sucesso!
            </div>';
          } 
          else
          {
            echo '<div class="alert alert-danger" role="alert">
              Cadastro não alterado!
            </div>';
          }
              }

          ?>