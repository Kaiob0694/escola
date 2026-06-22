<?php
require_once "../../classes/professor.php";

$professor = new Professor();

$id = $_GET['id'];


$dado = $professor->buscarPorId($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $professor->editar(
        $id,
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['telefone'],
        $_POST['especialidade']
    );

    header("Location: listar.php");
    exit;
}
include "../../includes/header.php";
include "../../includes/menu.php";

?>

<h2>Editar Professor</h2>

<form method="POST">

<p><label for="nome">Nome:</label>
<input type="text" id="nome" name="nome" value="<?= $dado['nome'] ?>" required></p>

<p><label for="cpf">CPF:</label>
<input type="text" id="cpf" name="cpf" value="<?= $dado['cpf'] ?>" required></p>

<p><label for="telefone">Telefone:</label>
<input type="text" id="telefone" name="telefone" value="<?= $dado['telefone'] ?>" required></p>

<p><label for="especialidade">Especialidade:</label>
<input type="text" id="especialidade" name="especialidade" value="<?= $dado['especialidade'] ?>" required></p>

<button type="submit">Editar</button>
</form>