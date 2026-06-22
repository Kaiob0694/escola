<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../../classes/aluno.php";

$aluno = new Aluno();

$dados = $aluno->listar();

include "../../includes/header.php";
include "../../includes/menu.php";

?>

<div class="container">

    <div class="card">

        <h2>Lista de Alunos</h2>

        <a href="cadastrar.php" class="botao-novo">
            Cadastrar Novo Aluno
        </a>


        <br><br>

        <table border="1">

            <tr>

                
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Ações</th>

            </tr>

            <?php foreach ($dados as $linha): ?>

                <tr>

                    
                    <td><?= $linha['nome'] ?></td>
                    <td><?= $linha['cpf'] ?></td>
                    <td><?= $linha['telefone'] ?></td>

                    <td>

                        <a class="editar" href="editar.php?id=<?= $linha['id_aluno'] ?>">
                            Editar
                        </a>

                        |

                        <a class="excluir" href="excluir.php?id=<?= $linha['id_aluno'] ?>"
                            onclick="return confirm('Deseja realmente excluir este aluno?')">
                            Excluir
                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        </table>
    </div>

    <?php

    include "../../includes/footer.php";

    ?>