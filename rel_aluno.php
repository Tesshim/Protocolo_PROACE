<?php
    include('dbconnection.php');
    include('topo.php');
    $id_aluno = $_GET['id_aluno'];

    $sql = "SELECT * FROM tb_aluno WHERE id_aluno = $id_aluno";
    $q_aluno = mysqli_query($conn, $sql);
    $aluno = mysqli_fetch_array($q_aluno, MYSQLI_BOTH);
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