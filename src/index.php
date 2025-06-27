<?php
$host = 'mysql';
$db = 'testdb';
$user = 'root';
$pass = 'example';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Hola Mundo desde PHP conectado a MySQL!";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>