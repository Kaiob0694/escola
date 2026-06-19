<?php
 
require_once "../../classes/matricula.php";
 
$matricula = new Matricula();
 
$dados = $matricula->listar();
 
include "../../includes/header.php";
include "../../includes/menu.php";
 
?>
 
<div class="container">
 
    <div class="card">
 
        <h2>Lista de Matrículas</h2>
 
        <a href="cadastrar.php" class="botao-novo">
            Nova Matrícula
        </a>
 
        <br><br>
 
        <table border="1">
 
            <tr>
                <th>ID</th>
                <th>Aluno</th>
                <th>Turma</th>
                <th>Data</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
 
            <?php foreach ($dados as $linha): ?>
 
                <tr>
 
                    <td><?= $linha['id_matricula'] ?></td>
                    <td><?= $linha['aluno'] ?></td>
                    <td><?= $linha['nome_turma'] ?></td>
                    <td><?= $linha['data_matricula'] ?></td>
                    <td><?= $linha['status'] ?></td>
 
                    <td>
 
                        <a class="editar"
                            href="editar.php?id=<?= $linha['id_matricula'] ?>">
                            Editar
                        </a>
 
                        |
 
                        <a class="excluir"
                            href="excluir.php?id=<?= $linha['id_matricula'] ?>"
                            onclick="return confirm('Deseja realmente excluir esta matrícula?')">
                            Excluir
                        </a>
 
                    </td>
 
                </tr>
    </div>
</div>
 
<?php endforeach; ?>
 
</table>
 
<?php include "../../includes/footer.php"; ?>