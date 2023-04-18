<?php

if (!empty($_GET['idinvestimento'])) {
    include_once('conexao.php');

    $idinvestimento = $_GET['idinvestimento'];

    $sqlSelect = "SELECT *  FROM investimento WHERE idinvestimento=$idinvestimento";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM investimento WHERE idinvestimento=$idinvestimento";
        $resultDelete = $conn->query($sqlDelete);
    }
}
header('Location: investimentos.php');
