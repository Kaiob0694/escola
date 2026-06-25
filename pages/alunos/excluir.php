<?php

require_once "../../classes/aluno.php";

$aluno = new Aluno();
$id = $_GET['id'];

try {
    $resultado = $aluno->excluir($id);
    if ($resultado) {
        header("Location: listar.php?msg=excluido");
    } else {
        header("Location: listar.php?erro=falha");
    }
} catch (PDOException $e) {
    // FK violation = código 23000
    header("Location: listar.php?erro=vinculo");
}
exit;