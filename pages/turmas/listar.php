<?php
 
require_once "../../classes/turma.php";
 
$turma = new Turma();
 
$dados = $turma->listar();
 
include "../../includes/header.php";
include "../../includes/menu.php";
 
?>
<div class="container">
 
    <div class="card">
 
        <h2>Lista de Turmas</h2>
 
        <a href="cadastrar.php" class="botao-novo">
            Cadastrar Nova Turma
        </a>
 
        <br><br>
 
        <table border="1">
 
            <tr>
                
                <th>Turma</th>
                <th>Série</th>
                <th>Ano Letivo</th>
                <th>Professor</th>
                <th>Ações</th>
            </tr>
 
            <?php foreach ($dados as $linha): ?>
 
                <tr>
 
                    
                    <td><?= $linha['nome_turma'] ?></td>
                    <td><?= $linha['serie'] ?></td>
                    <td><?= $linha['ano_letivo'] ?></td>
                    <td><?= $linha['professor'] ?></td>
 
                    <td>
 
                        <a class="editar"
                            href="editar.php?id=<?= $linha['id_turma'] ?>">
                            Editar
                        </a>
 
                        |
 
                        <a class="excluir"
                            href="excluir.php?id=<?= $linha['id_turma'] ?>"
                            onclick="return confirm('Deseja realmente excluir esta turma?')">
                            Excluir
                        </a>
 
                    </td>
 
                </tr>
 
            <?php endforeach; ?>
 
        </table>
    </div>
</div>
 
<?php include "../../includes/footer.php"; ?>
 