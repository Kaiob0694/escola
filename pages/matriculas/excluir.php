<?php
 
require_once "../../classes/matricula.php";
 
$matricula = new Matricula();
 
$id = $_GET['id'];
 
$matricula->excluir($id);
 
header("Location: listar.php");
exit;
 
 