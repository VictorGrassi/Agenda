<?php
require_once("connection.php");
if (isset($_POST['btnAdd'])) {
    $name = trim($_POST['txtName']);
    $phone = trim($_POST['txtPhone']);
    $address = trim($_POST['txtAddress']);

    $sql = "INSERT INTO Agenda (Nome, Telefone, Endereco) 
        VALUES ('$name', '$phone', '$address')";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        echo "<script>window.alert('Erro ao adicionar registro!')</script>";
        header('refresh:0.1;url=../pages/home.php');
    } else {
        echo "<script>window.alert('Registro adicionado com sucesso!')</script>";
        header('refresh:0.1;url=../pages/home.php');
    }
}
