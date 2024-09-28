<?php 

$servername = 'db'; // o nome do serviço mysql definido no docker-compose.yml
$username = 'user';
$password = 'password';
$database = 'meu_banco';

try {
    $conn = new PDO('mysql:host='.$servername.';dbname='.$database, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectado com sucesso ao banco de dados!';
} catch(PDOException $e) {
    echo 'Erro ao conectar: ' . $e->getMessage();
}
