<?php
include_once '../functions/func.php';

$func = new MyFunctionImplementation();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $func->massDelete($_POST['ids']);

    header("Location: ../index.php");
}
