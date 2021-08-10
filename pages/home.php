<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>Agenda</title>
</head>

<body>
    <header>
        <h1 class="tittle">JN Moura - Agenda</h1>
    </header>
    <main>
        <a class="button" href="record.php">Adicionar novo registro</a>
        <section>
            <form action="home.php" method="post">
                <label for="lblName">Nome: </label>
                <input type="text" name="txtName" placeholder="Nome da pessoa">
                <input type="submit" value="Buscar" name="btnSearch">
            </form>
            <?php
            require_once('../connection/connection.php');
            if (isset($_POST['btnSearch'])) {
                $name = $_POST['txtName'];
                $condicao = "Nome LIKE '%$name%'";
            } else {
                $condicao = 1;
            }
            $sql = "SELECT ID, Nome, Telefone, Endereco 'Endereço' FROM Agenda
            WHERE $condicao ORDER BY Nome ASC";
            $result = mysqli_query($connection, $sql);
            $result = mysqli_query($connection, $sql);
            if (!$result) {
                echo mysqli_error($connection);
            }
            $rows = mysqli_num_rows($result);
            if ($rows < 1) {
                echo "Nenhum registro encontrado!";
            } else {
                echo "
                <table>
                    <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr> ";
                while ($line = mysqli_fetch_array($result)) {
                    echo "
                        <tr>
                            <td>$line[0]</td>
                            <td>$line[1]</td>
                            <td>$line[2]</td>
                            <td>$line[3]</td>
                            <td><a href='rewrite.php?id=$line[0]'><img src=../images/Update.png width='28' height='28'></a></td>
                            <td><a href='../connection/delete.php?id=$line[0]'><img src=../images/Trash.png width='28' height='28'></a></td>
                        </tr> ";
                }
            }
            ?>
            </table>
        </section>
        <p><a href="home.php">&olarr; Exibir lista completa</a></p>
    </main>
    <footer>
        <p>&copy;JN Moura & Victor Grassi, 2021</p>
    </footer>
</body>

</html>