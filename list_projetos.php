<?php
include('dbconnection.php');

$sql = "SELECT * FROM tb_projeto ORDER BY 'titulo'";
$q_cliente = mysqli_query($conn, $sql);

?>

<div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Projetos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Projeto</th>
                  <th>Titulo</th>
                  <th>Coordenador</th>
                  <th>Locação</th>
                  <th>Início</th>
                  <th>Termino</th>
                  <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    while ($linha_cliente = mysqli_fetch_array($q_cliente,MYSQLI_BOTH)) 
                    { ?>

                      <tr>
                        <td><?php echo ($linha_cliente["id_projeto"]);?> </td>
                        <td><?php echo ($linha_cliente["titulo"]);?> </td>
                        <td><?php echo ($linha_cliente["coordenador"]);?> </td>
                        <td><?php echo ($linha_cliente["locacao"]);?> </td>
                        <td><?php echo ($linha_cliente["vigencia_inicio"]);?> </td>
                        <td><?php echo ($linha_cliente["vigencia_termino"]);?> </td>
                        <td>
                          <a href="index.php?area=edit_aluno&id_aluno=<?php echo $linha_cliente['id_aluno']; ?>"><button name="editar" type="submit" class="btn btn-primary">Editar</button></a>

                          <a href="del_aluno.php?id_aluno=<?php echo $linha_cliente['id_aluno']; ?>"><button name="exluir" type="submit" class="btn btn-danger">Excluir</button></a></td>
                        

                      </tr>

                   <?php } ?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Projeto</th>
                  <th>Titulo</th>
                  <th>Coordenador</th>
                  <th>Locação</th>
                  <th>Início</th>
                  <th>Termino</th>
                  <th>Ações</th>
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