<?php
    include('dbconnection.php');
    include('topo.php');
    $id_aluno = $_GET['id_aluno'];

    $sql = "SELECT * FROM tb_aluno WHERE id_aluno = $id_aluno";
    $q_aluno = mysqli_query($conn, $sql);
    $aluno = mysqli_fetch_array($q_aluno, MYSQLI_BOTH);

    $sql_projetos = "SELECT tb_vinculacao.`data`, tb_projeto.titulo, tb_projeto.coordenador, tb_projeto.locacao FROM tb_aluno INNER JOIN tb_vinculacao ON tb_vinculacao.fk_aluno = tb_aluno.id_aluno INNER JOIN tb_projeto ON tb_vinculacao.fk_projeto = tb_projeto.id_projeto WHERE tb_vinculacao.fk_aluno = tb_aluno.id_aluno AND tb_vinculacao.fk_projeto = tb_projeto.id_projeto";
    $q_projetos = mysqli_query($conn, $sql_projetos);

    $sql_advertencia = "SELECT tb_advertencia.`data` FROM tb_aluno INNER JOIN tb_advertencia ON tb_advertencia.fk_aluno = tb_aluno.id_aluno WHERE tb_advertencia.fk_aluno = tb_aluno.id_aluno";
    $q_advertencia = mysqli_query($conn, $sql_advertencia);

    $sql_documento = "SELECT tb_documentos.id_protocolo, tb_documentos.operador, tb_documentos.documento, tb_documentos.comentario, tb_documentos.`data` FROM tb_aluno INNER JOIN tb_documentos ON tb_documentos.id_aluno = tb_aluno.id_aluno WHERE tb_documentos.id_aluno = tb_aluno.id_aluno ";
    $q_documento = mysqli_query($conn, $sql_documento);

?>

<div align="center">
	<h4><b>Dados Pessoais</b></h4>
</div>

<table class="table table-striped">
        <tr>
            <th>Nome do Aluno</th>
            <th>CPF</th>
            <th>Matricula</th>
            <th>Curso</th>
        </tr>
        <tr>
            <td><?php echo ($aluno["nome_aluno"]); ?> </td>
            <td><?php echo ($aluno["cpf"]); ?> </td>  
            <td><?php echo ($aluno["matricula"]); ?> </td> 
            <td><?php echo ($aluno["curso"]); ?> </td>                       
        </tr>
</table>

<div align="center">
    <h4><b>Advertêcias</b></h4>
</div>

<table class="table table-striped">
        <tr>
            <th>Data</th>
        </tr>
        <tr>
            <?php
               while ($resultado = mysqli_fetch_array($q_advertencia,MYSQLI_BOTH)) 
               {
                 ?>
            <tr>  
                <td><?php 
                         $data = $resultado["data"];
                         $nova_data = explode("-", $data);
                         echo $nova_data[2].'/'.$nova_data[1].'/'.$nova_data[0]?> 
                </td>                     

            </tr>

                <?php } ?>

            <tr>
                <th>Data</th>
            </tr>

        </tr>
</table>

<div align="center">
    <h4><b>Documentos Entregues</b></h4>
</div>

<table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Operador</th>
            <th>Documento</th>
            <th>Comentario</th>
            <th>Data</th>
        </tr>
        <tr>
            <?php
            $contador = 0;
               while ($resultado = mysqli_fetch_array($q_documento,MYSQLI_BOTH)) 
               {

                
                if($resultado["documento"] == 'Declaração de Frequência')
                    $contador++;
                 ?>
            <tr>  
                <td><?php echo ($resultado["id_protocolo"]);?> </td>
                <td><?php echo ($resultado["operador"]);?> </td>
                <td><?php echo ($resultado["documento"]);?> </td>
                <td><?php echo ($resultado["comentario"]);?> </td>
                <td><?php 
                         $data = $resultado["data"];
                         $nova_data = explode("-", $data);
                         echo $nova_data[2].'/'.$nova_data[1].'/'.$nova_data[0]?> 
                </td>                     

            </tr>

                <?php } ?>

            <tr>
                <th>ID</th>
                <th>Operador</th>
                <th>Documento</th>
                <th>Comentario</th>
                <th>Data</th>
            </tr>

        </tr>
</table>


<div align="center">
    <h4><b>Projetos Vinculados</b></h4>
</div>

<table class="table table-striped">
        <tr>
            <th>Titulo</th>
            <th>Coordenador</th>
            <th>Locação</th>
            <th>Data</th>
            <th>/</th>
        </tr>
        <tr>
            <?php
               while ($resultado = mysqli_fetch_array($q_projetos,MYSQLI_BOTH)) 
               {
                 ?>
            <tr>  
                <td><?php echo ($resultado["titulo"]);?> </td>
                <td><?php echo ($resultado["coordenador"]);?> </td>
                <td><?php echo ($resultado["locacao"]);?> </td>
                <td><?php 
                         $data = $resultado["data"];
                         $nova_data = explode("-", $data);
                         echo $nova_data[2].'/'.$nova_data[1].'/'.$nova_data[0]?> 
                </td>                  

            </tr>

                <?php } ?>

            <tr>
                <th>Total de Horas Desempenhadas</th>
                <th></th>
                <th></th>
                <th></th>
                <th> <?php echo ($contador*48);?> </th>
            </tr>

        </tr>
</table>

