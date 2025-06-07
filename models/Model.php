<?php 
class Model {
    protected $db;
  
public function __construct() {
$host = 'localhost';
$db   = 'fashioncrystal';
$user = 'root';
$pass = ''; 
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->db = $pdo; 
    return $pdo; 
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    exit;
}
}
public function getConnection() {
    return $this->db;
}
}
?>
