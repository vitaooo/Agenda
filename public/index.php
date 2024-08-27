<?php
$pdo = new PDO("mysql:dbname=agenda;host=localhost", "root");

$sql = $pdo->query('SELECT * FROM notas');

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

session_start();
require '../vendor/autoload.php';
require '../src/routes.php';
$router->run( $router->routes );