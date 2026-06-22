<?php
 
require_once "../classes/consulta.php";
 
$consulta = new Consulta();
 
$dados = $consulta->matriculasCompletas();
 
include "../includes/header.php";
include "../includes/menu.php";
?>
 
<h2>Status Alunos</h2>
 
<table border="1">
 
    <tr>
        <th>Aluno</th>
        <th>Status</th>
    </tr>
 
    <?php foreach ($dados as $linha): ?>
 
        <tr>
            <td><?= $linha['aluno'] ?></td>
            <td><?= $linha['status'] ?></td>
        </tr>
 
    <?php endforeach; ?>
 
</table>
 
<?php include "../includes/footer.php"; ?>
 