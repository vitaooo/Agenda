<?php
if (!isset($_GET['nome'])) {
    header("Location: home.php");
    exit;
}

$nome = "%".trim($_GET['nome'])."%";

$dbh = new PDO("mysql:dbname=agenda;host=localhost", "root");

$sth = $dbh->prepare('SELECT * FROM `notas` WHERE `nome` LIKE :nome');
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);

print_r($resultados);exit;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da busca</title>
</head>
<body>
<h2>Resultado da busca</h2>
<?php
if (count($resultados)) {
    foreach($resultados as $Resultado) {
?>
<label><?php echo $Resultado['id']; ?> - <?php echo $Resultado['nome']; ?></label>
<br>
<?
} } else {
?>
<label>Não foram encontrados resultados pelos termos buscado.</label>
<?php
}
?>
</body>
</html>