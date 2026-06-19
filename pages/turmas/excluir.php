<?php
 
require_once "../../classes/turma.php";
 
$turma = new Turma();
 
$id = $_GET['id'];
 
$turma->excluir($id);
 
header("Location: listar.php");
exit;
 