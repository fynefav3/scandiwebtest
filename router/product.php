<?php
include_once '../functions/func.php';

$func = new MyFunctionImplementation();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $func->addProduct($_POST);

    header("Location: ../index.php");
} else {
    echo json_encode($func->productList());
}
