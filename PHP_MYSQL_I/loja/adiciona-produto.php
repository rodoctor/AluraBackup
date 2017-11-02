<?php include('cabecalho.php');
include('banco-produto.php');
include('conecta.php');

$produto = $_POST["produto"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];

//Necessário enviar query como string, caso contrário fica como vazio em caso de false
if (array_key_exists('usado', $_POST)) {
    $usado = "true";
} else {
    $usado = "false";
}


//executa a conexão com a query
if (insereProduto($conexao, $produto, $preco, $descricao, $usado, $categoria_id)) { ?>
    <p class="text-success"> O produto <?= $produto;?>, preço <?= $preco;?> foi adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">Ocorreu o seguinte erro ao adicionar o produto: <?= $msg;?></p>
<?php };
?>

<?php include('rodape.php');?>