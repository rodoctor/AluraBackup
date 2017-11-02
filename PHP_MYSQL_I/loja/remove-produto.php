<?php include('cabecalho.php');
include('conecta.php');
include('banco-produto.php');

$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location: produto-lista.php?remove=true");
die(); //sempre depois de um location deve haver um die
?>