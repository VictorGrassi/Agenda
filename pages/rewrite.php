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
        <h1>Alterar registro</h1>
        <hr>
        <section>
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
            } else {
                echo "Regstro inválido!";
                exit;
            }
            ?>
            <form action="../connection/update.php" method="POST">
                <label for="lblId">ID: </label>
                <input type="text" name="txtid" readonly value="<?php echo $id; ?>" />
                <br>
                <p>
                    <label for="lblName">Nome: </label>
                    <input type="text" required="required" name="txtName" maxlength="60" value="<?php echo $name; ?>" />
                    <br>
                </p>
                <label for="lblPhone">Telefone: </label>
                <input type="text" required="required" name="txtPhone" maxlength="20" value="<?php echo $phone; ?>" />
                <br></p>
                <label for="lblAddress">Endereço: </label>
                <input type="text" required="required" name="txtAddress" maxlength="100" value="<?php echo $address; ?>" />
                <br></p>
                <p><input type="submit" value="Alterar" name="btnUpdate" />
            </form>
            <p><a href="home.php">&cularr; Voltar a lista</a></p>
        </section>
    </main>
    <footer>
        <p>&copy;JN Moura & Victor Grassi, 2021</p>
    </footer>
</body>

</html>