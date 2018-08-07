<?php
    include('dbconnection.php');

    $sql_select = "SELECT * FROM tb_aluno ORDER BY nome_aluno";
    $sql_aluno_select = mysqli_query($conn, $sql_select);

?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">PROTOCOLO</h3>
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
                  <label for="exampleInputPassword1">Operador</label>
                  <input name="operador" id="operador" type="text" class="form-control" placeholder="Operador">
                </div>

                <div class="form-group">
                  <label>Documento</label>
                  <select name="documento" id="documento" class="form-control">
                    <option>Dados Bancários</option>
                    <option>Declaração de Frequência</option>
                    <option>Termo de Concessão e Escolha de Benefício</option>
                    <option>Vinculação em Projeto</option>
                    <option>Outro</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="comment">Comentário:</label>
                  <textarea name="coment" id="coment" class="form-control" rows="5"></textarea>
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
                $nome = $_POST['aluno'];
                $operador = $_POST['operador'];
                $documento = $_POST['documento'];
                $coment = $_POST['coment'];

                $sql = "INSERT INTO tb_documentos
                (id_aluno, operador, documento, comentario) values ('$nome', '$operador', '$documento', '$coment')";

                

                if(mysqli_query($conn, $sql))  
                {
                  $sql_select = "SELECT * FROM tb_documentos ORDER BY id_protocolo DESC LIMIT 1";
                  $sql_protocolo_select = mysqli_query($conn, $sql_select);
                  $protocolo_select = mysqli_fetch_array($sql_protocolo_select, MYSQLI_BOTH);

                  echo '<div class="alert alert-success" role="alert">
                  Documento '.$protocolo_select['id_protocolo'].' cadastrado com sucesso! </div>';

                }else
                {
                  echo '<div class="alert alert-danger" role="alert">
                  Documento não cadastrado!
                  </div>';
                }
              }



              ?>