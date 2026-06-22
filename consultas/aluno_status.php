<?php
 
require_once "../classes/consulta.php";
 
$consulta = new Consulta();
 
$dados = $consulta->alunosTurma();
 
include "../includes/header.php";
include "../includes/menu.php";
?>
 
<h2>Alunos Status</h2>
 
<table border="1">
 
    <tr>
        <th>Aluno</th>
        <th>Turma</th>
        <th>Status</th>
    </tr>
 
    <?php foreach ($dados as $linha): ?>
 
        <tr>
            <td><?= $linha['nome'] ?></td>
            <td><?= $linha['nome_turma'] ?></td>
            <td><?= $linha['status'] ?></td>
        </tr>
 
    <?php endforeach; ?>
 
</table>
 
<?php include "../includes/footer.php"; ?>