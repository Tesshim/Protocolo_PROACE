<?php
include('dbconnection.php');

$sql = "SELECT * FROM tb_aluno ORDER BY 'nome_aluno'";
$q_cliente = mysqli_query($conn, $sql);

?>

<div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Alunos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Aluno(CPF)</th>
                  <th>Nome Aluno</th>
                  <th>Matricula</th>
                  <th>Curso</th>
                  <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    while ($linha_cliente = mysqli_fetch_array($q_cliente,MYSQLI_BOTH)) 
                    { ?>
                      
                      <tr>
                        <td><?php echo ($linha_cliente["id_aluno"]);?> </td>
                        <td><?php echo ($linha_cliente["nome_aluno"]);?> </td>
                        <td><?php echo ($linha_cliente["matricula"]);?> </td>
                        <td><?php echo ($linha_cliente["curso"]);?> </td>
                        <td>
                          <a href="index.php?area=edit_aluno&id_aluno=<?php echo $linha_cliente['id_aluno']; ?>"><button name="editar" type="submit" class="btn btn-primary">Editar</button></a> 

                          <a href="index.php?area=rel_aluno&id_aluno=<?php echo $linha_cliente['id_aluno']; ?>"><button name="editar" type="submit" class="btn btn-success">Relatório</button></a>

                        </td>
                        

                      </tr>

                   <?php } ?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Aluno(CPF)</th>
                  <th>Nome Aluno</th>
                  <th>Matricula</th>
                  <th>Curso</th>
                  <th>Ação</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="enviar" type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
         
          </div>