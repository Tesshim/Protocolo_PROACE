<?php
    include('dbconnection.php');

    $data = date("Y-m");
    $inicio = $data."-01";
    $termino = $data."-31";
    $var = "Declaração de Frequência";

    $sql_declaracao = "SELECT tb_aluno.nome_aluno, tb_aluno.matricula, tb_documentos.documento, tb_documentos.comentario, tb_documentos.`data` FROM tb_aluno INNER JOIN tb_documentos ON tb_documentos.fk_aluno = tb_aluno.id_aluno WHERE tb_documentos.documento = '$var' AND  data   BETWEEN '$inicio' and '$termino'";
    $q_declaracao = mysqli_query($conn, $sql_declaracao);


?>

<div align="center">
    <h4><b>Frequências do Mês</b></h4>
</div>

<table class="table table-striped">
        <tr>
            <th>Nome do Aluno</th>
            <th>Matricula</th>
            <th>Documento</th>
            <th>Comentário</th>
            <th>Data</th>
        </tr>
        <tr>
            <?php

               while ($resultado = mysqli_fetch_array($q_declaracao,MYSQLI_BOTH)) 
               {

                 ?>
            <tr>  
                <td><?php echo ($resultado["nome_aluno"]);?> </td>
                <td><?php echo ($resultado["matricula"]);?> </td>
                <td><?php echo ($resultado["documento"]);?> </td>
                <td><?php echo ($resultado["comentario"]);?> </td>
                <td><?php 
                         $data = $resultado["data"];
                         $nova_data = explode("-", $data);
                         echo $nova_data[2].'/'.$nova_data[1].'/'.$nova_data[0]?> 
                </td>                     

            </tr>

                <?php } ?>

        </tr>
</table>

