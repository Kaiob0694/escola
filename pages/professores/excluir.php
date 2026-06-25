<?php

require_once "../../classes/professor.php";

$professor = new Professor();

$id = $_GET['id'];

try {

    $resultado = $professor->excluir($id);

    if ($resultado) {
        header("Location: listar.php?msg=excluido");
    } else {
        header("Location: listar.php?erro=falha");
    }

} catch (PDOException $e) {
    // Violação de FK (SQLSTATE 23000) = professor vinculado a turma ou disciplina
    header("Location: listar.php?erro=vinculo");
}

exit;