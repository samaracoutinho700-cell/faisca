<?php
session_start(); // Inicia a sessão em todas as páginas que incluírem este arquivo

// Configurações do banco de dados MySQL
$host = "localhost";
$banco = "nome_do_banco";
$usuario = "root";
$senha = "";

// Conexão com o banco de dados usando PDO
try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Opcional: configuração que retorna os dados como array associativo por padrão
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro de conexão com o banco de dados: " . $e->getMessage();
    exit;
}
