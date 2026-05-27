<?php
session_start(); // Inicia a sessão em todas as páginas que incluírem este arquivo

// Configurações do banco de dados MySQL
$host = "127.0.0.1";
$banco = "sistema";
$usuario = "root";
$senha = "";

// Conexão com o banco de dados usando PDO
try {
    $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=sistema;charset=utf8', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro de conexão com o banco de dados: " . $e->getMessage();
    exit;
}
