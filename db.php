<?php
$host = 'localhost';
$dbname = 'task_management';
$username = 'root'; // Ajuste conforme seu banco de dados
$password = ''; // Ajuste conforme sua senha

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
}
?>

