<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Excluir</title>
    <style>
        main {
            width: 50%;
            height: 250px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            font-size: 1.2em;
        }

        .button {
            font-size: 1.1em;
            padding: 10px 20px;
            margin-right: 20px;
        }

        .yes {
            background-color: red;
        }

        .yes:hover {
            background-color: rgba(255, 0, 0, 0.600);
        }
    </style>
</head>

<body>
    <main>
        <?php
        require_once('../connection/connection.php');
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM Agenda WHERE id=$id LIMIT 1";
            $result = mysqli_query($connection, $sql);
            $line = mysqli_fetch_array($result);
            $name = $line[1];
            $phone = $line[2];
            $address = $line[3];
            $qtd = mysqli_num_rows($result);
            if ($qtd < 1) {
                echo "Não Existe este Produto!";
                exit;
            } else {
                echo "<p>TEM CERTEZA QUE DESEJA EXCLUIR ESSE REGISTRO?</p>";
                echo "<p>Nome: " . $name . "</p>";
                echo "<p>Telefone: " . $phone . "</p>";
                echo "<p>Endereço: " . $address . "</p>";
                echo "<p><a href='delete.php?id=$id&answer=1' class='button yes'>Sim</a> 
                <a href='delete.php?id=$id&answer=2' class='button'>Não</a>";
                $sql = "DELETE FROM Agenda WHERE id=$id";
                if (isset($_GET['answer'])) {
                    $answer = $_GET['answer'];
                    if ($answer == 1) {
                        $result = mysqli_query($connection, $sql);
                        if ($result) {
                            echo "<script>window.alert('Registro excluido com sucesso!')</script>";
                            header('refresh:0.1;url=../pages/home.php');
                        } else {
                            echo "<script>window.alert('Não foi possivél excluir o registro!')</script>";
                            header('refresh:0.1;url=../pages/home.php');
                        }
                    } else {
                        echo "<script>window.alert('Registro não excluido!')</script>";
                        header('refresh:0.1;url=../pages/home.php');
                    }
                }
            }
        }
        ?>
    </main>
</body>

</html>