<?php
require_once("connection.php");
if (isset($_POST['btnUpdate'])) {
    $id = $_POST['txtid'];
    $name = $_POST['txtName'];
    $phone = $_POST['txtPhone'];
    $address = $_POST['txtAddress'];
    $sql = "UPDATE Agenda SET Nome='$name', Telefone='$phone', Endereco='$address' WHERE id=$id";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        echo "<script>window.alert('Erro ao atualizar registro!')</script>";
        header('refresh:0.1;url=../pages/home.php');
    } else {
        echo "<script>window.alert('Registro atualizado com sucesso!')</script>";
        header('refresh:0.1;url=../pages/home.php');
    }
}
