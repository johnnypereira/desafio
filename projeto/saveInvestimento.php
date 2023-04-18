<?php
// isset -> serve para saber se uma variável está definida
include_once('conexao.php');
if (isset($_POST['update'])) {
    $id = $_POST['idinvestimento'];
    $nome = $_POST['nome'];
    $sigla = $_POST['sigla'];
    $descricao = $_POST['descricao'];

    $sqlInsert = "UPDATE investimento 
        SET nome='$nome',sigla='$sigla',descricao='$descricao'
        WHERE idinvestimento=$id";
    $result = $conn->query($sqlInsert);
    print_r($result);
}
header('Location: investimentos.php');
