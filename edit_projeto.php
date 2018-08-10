<?php
    include('dbconnection.php');
    $id_projeto = $_GET['id_projeto'];

    $sql = "SELECT * FROM tb_projeto WHERE id_projeto = $id_projeto";
    $q_projeto = mysqli_query($conn, $sql);
    $projeto = mysqli_fetch_array($q_projeto, MYSQLI_BOTH);

?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Projetos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="titulo">Título</label>
                  <input required name="titulo" type="text" class="form-control" id="titulo" value="<?php echo $projeto['titulo']; ?>">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="coordenador">Coordenador</label>
                  <input required name="coordenador" type="text" class="form-control" id="coordenador" value="<?php echo $projeto['coordenador']; ?>">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="locacao">Unidade de Registro</label>
                  <input required name="locacao" type="text" class="form-control" id="locacao" value="<?php echo $projeto['locacao']; ?>">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                <label for="iniv">Início da Vigência:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="iniv" id="iniv" type="date" class="form-control pull-right" value="<?php echo $projeto['vigencia_inicio']; ?>">
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
                  <input name="termv" id="termv" type="date" class="form-control pull-right" value="<?php echo $projeto['vigencia_termino']; ?>">
                </div>
              </div>
              </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button name="salvar" id="enviar" type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>

          <?php  
              if (isset($_POST['salvar'])) {
                $titulo = $_POST['titulo'];
                $coordenador = $_POST['coordenador'];
                $locacao = $_POST['locacao'];
                $iniv = $_POST['iniv'];
                $termv = $_POST['termv'];

                $sql_editar = "UPDATE tb_projeto SET titulo = '$titulo', coordenador = '$coordenador', locacao = '$locacao', vigencia_inicio = '$iniv', vigencia_termino = '$termv' WHERE id_projeto = '$id_projeto'";

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