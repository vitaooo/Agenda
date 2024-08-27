<?php
$pdo = new PDO("mysql:dbname=agenda;host=127.0.0.1", "root");

$sql = $pdo->query('SELECT * FROM notas');

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

session_start();
require '../vendor/autoload.php';
require '../routes/web.php';
$router->run( $router->routes );