<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

//echo "CONEXAO COM BANCO DE DADOS SUCESSO!";
