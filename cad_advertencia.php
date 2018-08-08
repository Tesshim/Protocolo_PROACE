<?php
    include('dbconnection.php');

    $sql_select = "SELECT * FROM tb_aluno ORDER BY nome_aluno";
    $sql_aluno_select = mysqli_query($conn, $sql_select);

?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">ADVERTÊNCIA</h3>
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
                $data = $_POST['data'];

                $sql = "INSERT INTO tb_advertencia
                (fk_aluno, data) values ('$aluno','$data')";

                

                if(mysqli_query($conn, $sql))  
                {
                  echo '<div class="alert alert-success" role="alert">
                  Advertência cadastrada com sucesso! </div>';

                }else
                {
                  echo '<div class="alert alert-danger" role="alert">
                  Falha na Advertência!
                  </div>';
                }
              }



              ?>