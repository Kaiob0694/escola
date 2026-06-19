<?php
 
require_once "../../classes/disciplina.php";
 
$disciplina = new Disciplina();
 
$dados = $disciplina->listar();
 
include "../../includes/header.php";
include "../../includes/menu.php";
 
?>
 
<div class="container">
 
    <div class="card">
        <h2>Lista de Disciplinas</h2>
 
        <a href="cadastrar.php" class="botao-novo">
            Cadastrar Nova Disciplina
        </a>
 
        <br><br>
 
        <table border="1">
 
            <tr>
                <th>ID</th>
                <th>Disciplina</th>
                <th>Carga Horária</th>
                <th>Professor</th>
                <th>Ações</th>
            </tr>
 
            <?php foreach ($dados as $linha): ?>
 
                <tr>
 
                    <td><?= $linha['id_disciplina'] ?></td>
                    <td><?= $linha['nome_disciplina'] ?></td>
                    <td><?= $linha['carga_horaria'] ?></td>
                    <td><?= $linha['professor'] ?></td>
 
                    <td>
 
                        <a class="editar"
                            href="editar.php?id=<?= $linha['id_disciplina'] ?>">
                            Editar
                        </a>
 
                        |
 
                        <a class="excluir"
                            href="excluir.php?id=<?= $linha['id_disciplina'] ?>"
                            onclick="return confirm('Deseja realmente excluir esta disciplina?')">
                            Excluir
                        </a>
 
                    </td>
 
                </tr>
    </div>
</div>
 
<?php endforeach; ?>
 
</table>
 
<?php include "../../includes/footer.php"; ?>