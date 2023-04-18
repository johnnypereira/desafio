<?php

if (!empty($_GET['id_cliente'])) {
    include_once('conexao.php');

    $id_cliente = $_GET['id_cliente'];

    $sqlSelect = "SELECT *  FROM cliente WHERE id_cliente=$id_cliente";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM cliente WHERE id_cliente=$id_cliente";
        $resultDelete = $conn->query($sqlDelete);
    }
}
header('Location: clientes.php');
