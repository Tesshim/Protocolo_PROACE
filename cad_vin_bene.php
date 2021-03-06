<?php
    include('dbconnection.php');

    $sql_select = "SELECT * FROM tb_aluno ORDER BY nome_aluno";
    $sql_aluno_select = mysqli_query($conn, $sql_select);

    $sql_select_proj = "SELECT * FROM tb_projeto ORDER BY titulo";
    $sql_proj_select = mysqli_query($conn, $sql_select_proj);

?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">VINCULAÇÃO DE BENEFÍCIO</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                <label>Aluno</label>
                <select name="aluno" id="aluno" class="form-control select2 <?php echo $class;?>" style="width: 100%;">
                  <?php 

                while($aluno_select = mysqli_fetch_array($sql_aluno_select, MYSQLI_BOTH))
                { ?>

                    <option value="<?php echo $aluno_select['id_aluno']; ?>"><?php echo $aluno_select['nome_aluno'];?></option>

               <?php } ?>
                </select>
              </div>

              <div class="form-group">
                  <label>Benefícios</label>
                  <select name="beneficio" id="beneficio" class="form-control">
                    <option>Moradia</option>
                    <option>Manutenção</option>
                    <option>Material Pedagógico</option>
                    <option>Creche</option>
                  </select>
                </div>

                <div class="form-group">
                <label for="data">Data:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="data" id="data" type="date" class="form-control pull-right">
                </div>
              </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="enviar" id="enviar" type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>

          <?php  
              if (isset($_POST['enviar'])) {
                $aluno = $_POST['aluno'];
                $beneficio = $_POST['beneficio'];
                $data = $_POST['data'];

                $sql = "INSERT INTO tb_beneficio
                (fk_aluno, beneficio, data) values ('$aluno', '$beneficio', '$data')";

                

                if(mysqli_query($conn, $sql))  
                {
                  echo '<div class="alert alert-success" role="alert">
                  Vinculação feita com sucesso! </div>';

                }else
                {
                  echo '<div class="alert alert-danger" role="alert">
                  Falha na Vinculação!
                  </div>';
                }
              }



              ?>