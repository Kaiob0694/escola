<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../../classes/professor.php";

$professor = new Professor();

$dados = $professor->listar();

include "../../includes/header.php";
include "../../includes/menu.php";

?>

<div class="container">

    <div class="card">

        <h2>Lista de Professores</h2>

        <a href="cadastrar.php" class="botao-novo">
            Cadastrar Novo Professor
        </a>

        <br><br>

        <?php if (isset($_GET['msg']) && $_GET['msg'] === 'excluido'): ?>
            <p style="color: green; font-weight: bold;">
                Professor excluído com sucesso!
            </p>
        <?php endif; ?>

        <?php if (isset($_GET['erro']) && $_GET['erro'] === 'vinculo'): ?>
            <p style="color: red; font-weight: bold;">
                Não é possível excluir: este professor está vinculado a uma turma ou disciplina.
                Remova o vínculo antes de excluir.
            </p>
        <?php endif; ?>

        <?php if (isset($_GET['erro']) && $_GET['erro'] === 'falha'): ?>
            <p style="color: red; font-weight: bold;">
                Erro ao excluir o professor. Tente novamente.
            </p>
        <?php endif; ?>

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

                        <a class="editar"
                           href="editar.php?id=<?= $linha['id_professor'] ?>">
                            Editar
                        </a>

                        |

                        <a class="excluir"
                           href="excluir.php?id=<?= $linha['id_professor'] ?>"
                           onclick="return confirm('Deseja realmente excluir este professor?')">
                            Excluir
                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        </table>

    </div>

<?php include "../../includes/footer.php"; 
?>